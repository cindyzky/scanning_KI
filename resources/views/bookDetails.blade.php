@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Book Details</span>
@endsection

@section('content')

@if(session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <div class="books" id='borrowedBooks'>
        <article class="mb-5">
        <div class="book-item">
            <div class="book-details">
                <img src="{{ asset($bookDetail->image_path) }}" alt="{{ $bookDetail->title }}" style="max-width: 200px; height: auto;">
                <div class="book-info">
                    <h2>{{ $bookDetail->title }}</h2>
                    <p class="author">Author: {{ $bookDetail->penulis }}</p>
                    <p class="kategori"><a href="/Categories" class="category-link">Category :</a> <a href="/Categories/{{ $bookDetail->category->slug }}" class="category-link">{{ $bookDetail->category->name }}</a></p>
                    <p class="jumlah_tersedia">Available Books: {{ $bookDetail->jumlah_tersedia }} books</p>
                    <p class="sinopsis">{{ $bookDetail->sinopsis }}</p>
                    @if ($borrows->contains($bookDetail->id))
                        @if ($bookDetail->jumlah_tersedia > 0)
                        <div class="button-group">
                            <form method="POST" action="{{ route('books.borrow', ['book' => $bookDetail->id]) }}">
                                    @csrf
                                    <button type="submit" class="borrow-button">BORROW</button>
                                </form>
                                <form method="POST" action="{{ route('books.return', ['borrow' => $borrowIds->first()]) }}">
                                    @csrf
                                    <button type="submit" class="borrow-button">RETURN</button>
                                </form>
                        </div>
                        @else
                        <div class="button-group">
                            <form method="POST" action="{{ route('books.return', ['borrow' => $borrowIds->first()]) }}">
                                @csrf
                                <button type="submit" class="borrow-button">RETURN</button>
                            </form>
                            <form method="POST" action="{{ route('books.waitlist', ['book' => $bookDetail->id]) }}">
                                @csrf
                                <button type="submit" class="waiting-list-button">ADD WAITING LIST</button>
                            </form>
                        </div>
                        @endif
                    @else
                        @if ($bookDetail->jumlah_tersedia > 0)
                            <form method="POST" action="{{ route('books.borrow', ['book' => $bookDetail->id]) }}">
                                @csrf
                                <button type="submit" class="borrow-button">BORROW</button>
                            </form>
                        @else
                            <form method="POST" action="{{ route('books.waitlist', ['book' => $bookDetail->id]) }}">
                                @csrf
                                <button type="submit" class="waiting-list-button">ADD WAITING LIST</button>
                            </form>
                        @endif
                    @endif

                </div>
            </div>
            </article>
            <a href="/BooksData" class="back">Back</a>
        </div>
    
@endsection