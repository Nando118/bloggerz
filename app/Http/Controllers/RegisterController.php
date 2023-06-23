<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'required|unique:users|min:6|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:6|max:255',
        ]);

        // Trim spasi pada username
        $validatedData['username'] = strtolower(str_replace(' ', '', $validatedData['username']));

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        $user = User::create($validatedData);

        // $request->session()->flash('success', 'Registration Successfull! Please Login Here');

        if ($user) {
            # code...
            return redirect('/login')->with('success', 'Registration Successfull! Please Login Here');
        }else {
            # code...
            return redirect('/login')->with('failed', 'Registration Failed!');
        }

    }
}
