@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Your Profile</span>
@endsection

@section('content')
@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
<div class="container">
        <div class="row justify-content-center">

            <div class="emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                        @if(auth()->user()->profile_picture)
                            <img src="{{ asset('storage/profile_pictures/' . auth()->user()->profile_picture) }}" alt="Profile Picture"/>
                        @else
                            <img src="{{ asset('img/Profile2.jpeg') }}" alt="Profile Picture"/>
                        @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h4>
                                    {{ auth()->user()->username }}
                                    </h4>
                                    <h6>
                                    NIM: {{ auth()->user()->nim }}
                                    </h6>
                                    <h6>Email: {{ auth()->user()->email }}</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <a href="#editProfile" class="profile-edit-btn">Edit Profile</a>
                        <a href="#changePassword" class="profile-edit-btn">Edit Password</a>
                    </div>
                </div>

            </form>
            </div>

        </div>     
</div>

<div id="editProfile" class="section-container">
    <h4>Change Profile</h4>
        <div class="col-md-12">
        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data" >
            @csrf
            <label for="">Username</label>
            <input type="text" name="username" value="{{ auth()->user()->username }}" class="form-control change-profile" required >
            <label for="">NIM</label>
            <input type="text" name="nim" value="{{ auth()->user()->nim }}" class="form-control change-profile" required >
            <label for="">Email</label>
            <input type="email" name="email" value="{{ auth()->user()->email }}" class="form-control change-profile" required >

            <label for="">Upload Profile Picture</label>
            <div class="input-group mb-3">
            <input type="file" name="profile_picture" class="form-control change-profile" id="inputGroupFile02">
            </div>

            <button type="submit" class="change-btn">Save</button>
        </form>
        </div>
    </div>

    <div id="changePassword" class="section-container">
    <h4>Change Password</h4>
        <div class="col-md-12">
        <form method="POST" action="{{ route('profile.update') }}" >
            @csrf
            <input type="password" class="form-control change-profile" name="password" placeholder="Password baru">
            <input type="password" class="form-control change-profile" name="password_confirmation" placeholder="Konfirmasi password baru">

            <button type="submit" class="change-btn">Save</button>
        </form>
        </div>
    </div>
</div>

@endsection