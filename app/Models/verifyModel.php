<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class verifyModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'password',
        'coupon',
        'status',
    ];
}
