<?php

namespace App\Http\Controllers;

use App\Models\User;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(){
        request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'
        ]);

        // Create and save the user
        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        // Log the user in
        auth()->login($user);

        // Redirect to homepage
        return redirect('/');}
}
