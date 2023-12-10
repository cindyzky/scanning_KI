@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
@endsection

@section('content')
    <h1 class="mb-4">Welcome, {{ auth()->user()->username }}!</h1>
    <div class="container">
        <div class="row justify-content-center">

            <div class="emp-profile">
            <form method="get">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            @if(auth()->user()->profile_picture)
                                <img src="{{ asset('storage/profile_pictures/' . auth()->user()->profile_picture) }}" alt="Profile Picture"/>
                            @else
                                <img src="{{ asset('img/Profile3.jpeg') }}" alt="Profile Picture"/>
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
                </div>
                <div class="dashboard-button">
                    <a href="/BooksData" class="borrow-book">
                        <span class="button-icon">📚</span> Borrow Book
                    </a>
                    <a href="/BorrowedBooks" class="return-book">
                        <span class="button-icon">↩️</span> Return Book
                    </a>
                </div>
                    
            </form>
            </div>

        </div>     
</div>



@endsection