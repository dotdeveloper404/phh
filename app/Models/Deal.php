<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $fillable  = [
        'name',
        'price',
        'image',
        'description',
        'start_time',
        'end_time',
        'date'
    ];
}
