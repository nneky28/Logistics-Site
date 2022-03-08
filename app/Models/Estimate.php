<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;
    public $fillable=[
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
    ]; 
}
