<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    use HasFactory;

    protected $fillable = ['order_id', 'deal_id', 'quantity', 'subtotal'];
    protected $with = [];

    public function order() {
        return $this->belongsTo(Order::class);
    }

    public function deal() {
        return $this->belongsTo(Deal::class);
    }
}
