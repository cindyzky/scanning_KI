@extends('layouts.user')

@section('form')
            <form action="/register" method="POST">
                @csrf
                <h2>Registration</h2>
                <hr>
                <label for="">Name</label>
                <input class="form-control @error('name') is-invalid @enderror" type="text" placeholder="NAME*" name="name" id="name" value="{{ old('name') }}">
                @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label for="">Email</label>
                <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="EMAIL*" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label for="">NIM</label>
                <input class="form-control @error('nim') is-invalid @enderror" type="text" placeholder="NIM*" name="nim" id="nim" value="{{ old('nim') }}">
                @error('nim')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <label for="">Password</label>
                <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="PASSWORD*" name="password" id="password">
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <p>
                    Have an account? <a href="/login">Login</a>
                </p>
                <div class="button-container">
                    <button type="submit">Register</button>
                </div>
                
            </form>
@endsection
