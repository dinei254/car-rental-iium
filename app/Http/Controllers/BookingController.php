<?php

namespace App\Http\Controllers;
use App\Models\Car;
use App\Models\Booking;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Barryvdh\DomPDF\Facade\Pdf;


class BookingController extends Controller
{
    public function searchForm()
{
    return view('booking.search');
}

public function search(Request $request)
{
    $request->validate([
        'start_date' => 'required|date',
        'end_date' => 'required|date|after_or_equal:start_date',
    ]);

    $start = $request->start_date;
    $end = $request->end_date;

    $cars = Car::where('status', 'available')
        ->whereDoesntHave('bookings', function ($query) use ($start, $end) {
            $query->where('start_date', '<=', $end)
                  ->where('end_date', '>=', $start)
                  ->whereIn('status', ['pending', 'approved']);
        })
        ->get();

    return view('booking.available', compact('cars', 'start', 'end'));
}
public function confirm(Request $request, Car $car)
{
    $start = $request->start;
    $end = $request->end;

    $days = Carbon::parse($start)->diffInDays(Carbon::parse($end)) + 1;
    $total = $days * $car->price_per_day;

    return view('booking.confirm', compact('car', 'start', 'end', 'days', 'total'));
}
public function store(Request $request)
{
    $booking = Booking::create([
        'user_id' => Auth::id(),
        'car_id' => $request->car_id,
        'start_date' => $request->start_date,
        'end_date' => $request->end_date,
        'total_price' => $request->total_price,
        'status' => 'pending',
    ]);

    return redirect("/payment/{$booking->id}");

}

public function myBookings(Request $request)
{
    $query = Booking::with('car')
        ->where('user_id', Auth::id())
        ->latest();

    if ($request->status) {
        $query->where('status', $request->status);
    }

    $bookings = $query->get();

    return view('booking.my-bookings', compact('bookings'));
}
public function index()
{
    $bookings = Booking::with(['car', 'user'])
        ->latest()
        ->get();

    $pending = $bookings->where('status', 'pending');
    $approvedCount = $bookings->where('status', 'approved')->count();
    $rejectedCount = $bookings->where('status', 'rejected')->count();

    return view('admin.bookings.index', compact(
        'bookings',
        'pending',
        'approvedCount',
        'rejectedCount'
    ));
}
public function approve(Booking $booking)
{{
    // Safety check (optional but good)
    if ($booking->payment_status !== 'pending_verification') {
        return back()->with('error', 'Payment not verified yet.');
    }

    $booking->update([
        'status' => 'approved',
        'payment_status' => 'paid', // 🔥 THIS WAS MISSING
    ]);

    return back()->with('success', 'Booking approved and payment verified.');}
}
public function reject(Booking $booking)
{
    $booking->update(['status' => 'rejected']);
    return back();
}
public function cancel(Booking $booking)
{
    if ($booking->user_id !== Auth::id()) {
        abort(403);
    }

    if ($booking->status !== 'pending') {
        abort(403);
    }

    $booking->update(['status' => 'cancelled']);

    return back();
}
public function receipt(Booking $booking)
{
    // Security: only owner or admin
    if (
        Auth::id() !== $booking->user_id &&
        Auth::user()->role !== 'admin'
    ) {
        abort(403);
    }

    // Only allow receipt if paid & approved
    if ($booking->payment_status !== 'paid' || $booking->status !== 'approved') {
        abort(403);
    }

    $pdf = Pdf::loadView('receipts.booking', compact('booking'));

    return $pdf->download('receipt-booking-'.$booking->id.'.pdf');
}

}