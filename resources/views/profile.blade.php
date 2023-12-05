@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Your Profile</span>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">

            <div class="emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="file"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h4>
                                    {{ auth()->user()->name }}
                                    </h4>
                                    <h6>
                                    NIM: {{ auth()->user()->nim }}
                                    </h6>
                                    <h6>Email: {{ auth()->user()->email }}</h6>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Password"/>
                    </div>
                </div>

            </form>
            </div>

    </div>     
</div>

@endsection