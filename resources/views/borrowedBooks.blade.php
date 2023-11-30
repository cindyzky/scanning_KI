@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Borrowed Books</span>
@endsection

@section('content')
    <div class="books" id='borrowedBooks'>
        <article class="mb-5 border-bottom">
        <h1>List of Books</h1>
        @foreach($books as $book)
        <div class="book-item">
            <div class="book-details">
                <img src="{{ asset($book->image_path) }}" alt="{{ $book->title }}" style="max-width: 200px; height: auto;">
                <div class="book-info">
                    <h3><a href="/BookDetails/{{ $book->slug }}">{{ $book->title }}</a></h3>
                    <p class="author">Author: {{ $book->penulis }}</p>
                    <p class="excerpt">{{ $book->excerpt }}</p>
                    <a href="/BookDetails/{{ $book->slug }}">Read More...</a>
                </div>
            </div>
        </div>

        </article>
    @endforeach
    
@endsection