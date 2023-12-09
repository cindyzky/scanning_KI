@extends('layouts.user')

@section('form')
        <form action="/ResetPassword" method="POST">
                @csrf
                <h2>RESET PASSWORD</h2>
                <hr>
                <label for="">Password</label>
                <input type="password" placeholder="NEW PASSWORD*"name="password" id="password" required>

                <label for="">Confirm Password</label>
                <input type="password" placeholder="CONFIRM PASSWORD*"name="password" id="password" required>

                <div class="button-container">
                    <button type="submit">Submit</button>
                </div>
                
            </form>
@endsection
