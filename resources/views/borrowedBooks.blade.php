@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Borrowed Books</span>
@endsection

@section('content')
    @if($borrows->isEmpty())
        <div class="not-found">
            <h1>You haven't borrow any book</h1>
        </div>
    @else
    <div class="books" id='borrowedBooks'>
        <article>
        <h1>Borrowed Books</h1>
        @foreach($borrows as $borrow)
        <div class="book-item">
            <div class="book-details">
                <img src="{{ asset($borrow->book->image_path) }}" alt="{{ $borrow->book->title }}" style="max-width: 200px; height: auto;">
                <div class="book-info">
                    <h3><a href="/BookDetails/{{ $borrow->book->slug }}">{{ $borrow->book->title }}</a></h3>
                    <p class="author">Author: {{ $borrow->book->penulis }}</p>
                    <p class="excerpt">{{ $borrow->book->excerpt }}</p>
                    <a href="/BookDetails/{{ $borrow->book->slug }}">Read More...</a>

                </div>
            </div>
        </div>
        </article>
    @endforeach
    @endif

@endsection