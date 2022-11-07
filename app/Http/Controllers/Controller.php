<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function sendEmailAfterCheckout($to, $data)
    {
        if(is_array($to)) {
            foreach ($to as $email) {
                Mail::to($email)->send(new OrderPlaced($data));
            }
        } else {
            Mail::to($to)->send(new OrderPlaced($data));
        }
    }
}
