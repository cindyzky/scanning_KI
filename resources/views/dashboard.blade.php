@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
@endsection

@section('content')
    <h1>Welcome, {{ auth()->user()->name }}!</h1>
    <button class="dashboard-button borrow-book" onclick="window.location.href='/BooksData'">
    <span class="button-icon">📚</span> Borrow Book
    </button>
    <button class="dashboard-button return-book" onclick="window.location.href='/BorrowedBooks'">
        <span class="button-icon">↩️</span> Return Book
    </button>


@endsection