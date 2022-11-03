<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'name', 'price', 'image', 'quantity', 'subtotal'];
    protected $with = [];

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
