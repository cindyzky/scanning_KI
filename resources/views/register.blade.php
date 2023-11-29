@extends('layouts.user')

@section('form')
            <form action="">
                <h1>Registration</h1>
                <hr>
                <label for="">Email</label>
                <input type="text" placeholder="EMAIL*">
                <label for="">NIM</label>
                <input type="text" placeholder="NIM*">
                <label for="">Password</label>
                <input type="password" placeholder="PASSWORD*">
                <p>
                    Have an account? <a href="/login">Login</a>
                </p>
            </form>
@endsection

@section('button')
    <button>Register</button>
@endsection