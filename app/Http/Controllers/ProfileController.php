<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; 

class ProfileController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        return view('profile', [
            'title' => 'Your Profile'
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->nim = $request->input('nim');

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $fileName = $file->getClientOriginalName();
            $user->profile_picture = $fileName;

            $file->storeAs('profile_pictures', $fileName);
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated succesfully!');
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();

        $user->password = bcrypt($request->input('password'));

        $user->save();

        return redirect()->back()->with('success', 'Password updated succesfully!');
    }
}

