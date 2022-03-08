<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class calculateModel extends Model
{
    use HasFactory;
    public $fillable = [
        'weight',
        'distance',
        'bike',
        'tricycle',
        'mini van',
        'buses',
    ];
}
