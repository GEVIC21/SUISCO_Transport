<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public $fillable = [
        'service',
        'house_location',
        'school_location',
        'route',
        'phone_numbre',
        'distance',
        'price',
        'status',
    ];
}
