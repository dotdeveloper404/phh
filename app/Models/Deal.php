<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'date',
        'restaurant_id'
    ];

    public function restaurant() {
        return $this->belongsTo(User::class, 'restaurant_id', 'id');
    }

    protected function startTime() : Attribute {
        return Attribute::make(
            function($value) {
                return substr($value, 0, 5);
            }
        );
    }

    protected function endTime() : Attribute {
        return Attribute::make(
            function($value) {
                return substr($value, 0, 5);
            }
        );
    }


}
