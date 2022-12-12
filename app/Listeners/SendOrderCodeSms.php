<?php

namespace App\Listeners;

use App\Events\OrderPlaced;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Twilio\Rest\Client;

class SendOrderCodeSms
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
        $client = new Client(env('TWILIO_SID'), env('TWILIO_TOKEN'));

        $msg = "Your order has been placed at {$event->order->restaurant->profile->rest_name}.\nYour order code is {$event->order->code}.";

        $client->messages->create($event->order->user->profile->phone, [
            'from' => env('TWILIO_NUMBER'),
            'body' => $msg
        ]);
    }
}
