@extends('layouts.user')

@section('form')
            <form action="/submit" method="post">
                <h1>Login</h1>
                <hr>
                <label for="">Email</label>
                <input type="text" placeholder="EMAIL*">
                <label for="">Password</label>
                <input type="password" placeholder="PASSWORD*">
                <p>
                    <a href="#">Forgot Password?</a>
                </p>
                <p>
                    Don't have an account? <a href="/register">Register</a>
                </p>
            </form>
@endsection

@section('button')
    <button type="submit">Login</button>
@endsection