@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
@endsection

@section('content')
    <h1 class="mb-4">Welcome, {{ auth()->user()->name }}!</h1>
    <div class="container">
    <div class="row justify-content-center">

            <div class="emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="img/Profile2.jpeg" alt=""/>
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
    <button class="dashboard-button borrow-book" onclick="window.location.href='/BooksData'">
    <span class="button-icon">📚</span> Borrow Book
    </button>
    <button class="dashboard-button return-book" onclick="window.location.href='/BorrowedBooks'">
        <span class="button-icon">↩️</span> Return Book
    </button>


@endsection