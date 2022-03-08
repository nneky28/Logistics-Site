<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'carrier',
        'phone_number',
        'pickup_address',
        'drop_address',
        'weight',
        'distance',
        'estimate',
        'status',
        'coupon',

    ];
}
