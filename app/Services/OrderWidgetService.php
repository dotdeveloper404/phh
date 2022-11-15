<?php

namespace App\Services;

use App\Models\Order;

class OrderWidgetService {

    private $user;
    private $orders;
    
    public function __construct()
    {
        $this->user = auth()->user();

        $this->orders = Order::with(['items.deal', 'user'])->get()->map(function($o) {
            return $this->user->hasRole('Admin') ? $o : ($o->restaurant()->id == $this->user->id ? $o : null);
        })->filter();
    }

    public function totalOrders() {
        return $this->orders->count();
    }

    public function totalPendingOrders() {
        return $this->orders->map(function($o) {
            return $o->status == 'pending';
        })->filter()->count();
        // return $this->orders->countBy(function($o) );
    }

    public function totalCompletedOrders() {
        return $this->orders->map(function($o) {
            return $o->status == 'completed';
        })->filter()->count();
    }



    
}