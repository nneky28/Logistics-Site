<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class phoneBook extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'role',
        'location',
        'phone',
        'image'
    ];
}
