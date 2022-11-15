<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total', 'user_id', 'code'];
    protected $with = ['items', 'user'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function restaurant() {
        return $this->items->first()->deal->restaurant;
    }
}
