<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //

    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
        'name' => 'required|max:255',
        'email' => 'required|email:dns|unique:users',
        'nim' => 'required|digits:15|unique:users',
        'password' => 'required|min:8|max:225'
       ]);

       $validatedData['password'] = Hash::make($validatedData['password']);

       User::create($validatedData);
       
       $request->session()->flash('success', 'Registration succesfull! Please Login');

       return redirect('/login');
    }
}
