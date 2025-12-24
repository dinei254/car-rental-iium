<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class Car extends Model
{
    public function bookings()
{
    return $this->hasMany(Booking::class);
}
protected $fillable = [
    'car_name',
    'plate_number',
    'price_per_day',
    'description',
    'image',
    'status',
];


}
