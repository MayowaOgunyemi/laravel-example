<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(){
        $validatedAttributes = request()->validate([
            'first_name' => 'required|min:3',
            'last_name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);

        // Create and save the user
        $user = User::create($validatedAttributes);

        // Log the user in
        Auth::login($user);

        // Redirect to homepage
        return redirect('/jobs');}
}
