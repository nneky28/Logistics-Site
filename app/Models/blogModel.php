<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogModel extends Model
{
    use HasFactory;
    protected $fillable = [
        'author',
        'title',
        'desc',
        'content',
        'image',
        'categories',
    ];
}
