<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForgotPasswordController extends Controller
{
    //
    public function index()
    {
        return view('forgotPassword');
    }

    public function reset(Request $request)
    {
        $user = Auth::user();

        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect('login')->with('success', 'Password reset succesfully!');
       
    }
}
