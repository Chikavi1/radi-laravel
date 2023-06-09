<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Mail;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required'],
        ]);

        $data["email"] = $request->email;
        $data["title"] = "Bienvenido a Radi Pets";
        $data["body"]  = "Mira todo lo que puedes encontrar en Radi Pets.";

        Mail::send('mail.onBoarding', $data, function($message)use($data) {
            $message->to($data["email"])
                    ->subject($data["title"]);
        });


        $stripe = new \Stripe\StripeClient(ENV('STRIPE_ID'));
        $data = $stripe->customers->create([
            'name' => $request->name,
            'email' => $request->email
          ]);


        $user = User::create([
            'customer' => $data->id,
            'photo' => 'https://radi.pet/img/icon.png',
            'name'  => $request->name,
            'email' => $request->email,
            'code'  => 'web',
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        // enviar correo de bienvenida


        return redirect(RouteServiceProvider::HOME);
    }
}
