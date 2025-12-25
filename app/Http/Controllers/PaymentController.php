<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request, Booking $booking)
{
    $request->validate([
        'payment_proof' => 'required|image|max:2048',
    ]);

    $path = $request->file('payment_proof')
                    ->store('payments', 'public');

    Payment::create([
        'booking_id' => $booking->id,
        'payment_method' => 'duitnow',
        'amount' => $booking->total_price,
        'status' => 'pending_verification',
    ]);

    $booking->update([
        'payment_status' => 'pending_verification',
    ]);

    return redirect('/my-bookings')
        ->with('success', 'Payment proof submitted. Awaiting admin verification.');
}

}