<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendOrderPlacedEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OrderPlaced  $event
     * @return void
     */
    public function handle(OrderPlaced $event)
    {
        // Sending email to admins, user
        // @TODO add restaurant email to emails array
        // $order->load('items', 'user');
        // $adminEmails = User::role('Admin')->get()->map(function($u) {
        //     return $u->email;
        // })->all();
        // $emails = [$user->email, ...$adminEmails];

        // $this->sendEmailAfterCheckout($emails, $order);
    }
}
