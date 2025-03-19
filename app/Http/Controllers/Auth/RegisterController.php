<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return [
            new Middleware('guest')
        ];
    }

    function index()
    {
        return view('register');
    }

    function store(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email:rfc,dns|max:250|unique:users,email',
            'password' => 'required|string|min:8',
            'first_name' => 'required|string|min:2|max:50',
            'last_name' => 'required|string|min:2|max:50',
            'phone_number' => 'required|string|max:20|unique:users',
            'postal_code' => 'required|string|max:20',
        ]);

        $user = User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone_number' => $request->phone_number,
            'postal_code' => $request->postal_code,
        ]);

        event(new Registered($user));

        $credentials = $request->only('email', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route("verification.notice");
    }
}
