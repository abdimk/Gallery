<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //User Route
    public function create(){
        return view('user.create');
    }

    // Store the user route
    public function store(Request $requests){
       $formFilds = $requests->validate([
        'name' => ['required','min:4'],
        'email' => ['required','email',Rule::unique('users', 'email')],
        'password' => 'required|comformed|min:4'
       ]);

        //Hashing the password 
        $formFilds['password'] = bcrypt($formFilds['password']);
        User::create($formFilds);
    }

    //Show the user login form
    public function login(){
        return view('users.login');
    }


    public function authenticate(Request $request){
        $formFilds = $request->validate([
            'name' => ['required', 'email'],
            'password' => 'required'

        ]);

        if(auth()->attempt($formFilds)){
            $request->session()->regenerate();

            return redirect('/')->with('message', 'you have logged in');
        }

        return back()->withErrors(['email'=>'Invalid credentails'])->onlyInput('email');
    }
}
