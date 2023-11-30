@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Category</span>
@endsection

@section('content')
    <div class="books" id='borrowedBooks'>
        <article class="mb-5">
        <h1>Book Category : {{ $category }}</h1>
        @foreach($books as $book)
        <div class="book-item">
            <div class="book-details">
                <img src="{{ asset($book->image_path) }}" alt="{{ $book->title }}" style="max-width: 200px; height: auto;">
                <div class="book-info">
                    <h3><a href="/BookDetails/{{ $book->slug }}" >{{ $book->title }}</a></h3>
                    <p class="author">Author: {{ $book->penulis }}</p>
                    <p class="excerpt">{{ $book->excerpt }}</p>
                </div>
            </div>
        </div>
    @endforeach
    </article>
@endsection