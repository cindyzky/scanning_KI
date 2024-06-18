@extends('layouts.user')

@section('form')
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

@if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
            <form action="/login" method="POST">
                @csrf
                <h1>Login</h1>
                <hr>
                <label for="">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="EMAIL*" name="email" id="email" autofocus required="{{ old ('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror

                <label for="">Password</label>
                <input type="password" placeholder="PASSWORD*"name="password" id="password" required>
                <p>
                    <a href="/ResetPassword">Forgot Password?</a>
                </p>
                <p>
                    Don't have an account? <a href="/register">Register</a>
                </p>
                <div class="button-container">
                    <button type="submit">Login</button>
                </div>
                
            </form>
@endsection
