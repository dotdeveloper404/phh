<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {

        $userData = $request->validate([
            'type' => ['required', 'in:cx,res'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        if ($userData['type'] == 'cx') {
            $cxData = $request->validate([
                'dob' => 'required|date',
                'dl_expiry' => 'required|date',
                'dl_state' => 'required|string',
                'phone' => 'required|string'
            ]);
        } else if ($userData['type'] == 'res') {
            $resData = $request->validate([
                'rest_name' => 'required|string',
                'tax_id' => 'required|string',
                'call_date_time' => 'required|date',
            ]);
        }

        $user = User::create($userData);

        Auth::login($user);

        if ($userData['type'] == 'cx') {
            $cxData = array_merge($cxData, ['user_id' => $user->id]);
            $user->assignRole('Customer');
            Customer::create($cxData);
            $reponse = redirect()->route('home.index');
        } else if ($userData['type'] == 'res') {
            $resData = array_merge($resData, ['user_id' => $user->id]);
            $user->assignRole('Restaurant');
            Restaurant::create($resData);
            $reponse = redirect(RouteServiceProvider::HOME);
        }
        return $reponse;
    }
}
