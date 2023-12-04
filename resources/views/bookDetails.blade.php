@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Book Details</span>
@endsection

@section('content')
    <div class="books" id='borrowedBooks'>
        <article class="mb-5">
        <div class="book-item">
            <div class="book-details">
                <img src="{{ asset($bookDetail->image_path) }}" alt="{{ $bookDetail->title }}" style="max-width: 200px; height: auto;">
                <div class="book-info">
                    <h3>{{ $bookDetail->title }}</h3>
                    <p class="author">Author: {{ $bookDetail->penulis }}</p>
                    <p class="kategori"><a href="/Categories">Category :</a> <a href="/Categories/{{ $bookDetail->category->slug }}">{{ $bookDetail->category->name }}</a></p>
                    <p class="sinopsis">{{ $bookDetail->sinopsis }}</p>
                </div>
            </div>
            </article>
            <a href="/BooksData" class="back">Back</a>
        </div>
    
@endsection