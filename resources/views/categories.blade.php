@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Category</span>
@endsection

@section('content')
    <div class="books" id='borrowedBooks'>
        <h1>Book Categories</h1>
        <div class="book-item">
        @foreach($categories as $category)
        
            <ul>
                <li>
                <h3><a href="/Categories/{{ $category->slug }}" class="text-decoration-none">{{ $category->name }}</a></h3>
                </li>
            </ul>

    @endforeach
            </div>

    <a href="/BooksData" class="back">Back To List of Books</a>
@endsection