<?php

namespace App\Http\Controllers;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(){
        request()->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(!auth()->attempt(request(['email', 'password']))){
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }

        return redirect('/');
    }

    public function destroy(){
        auth()->logout();
        return redirect('/login');
    }
}
