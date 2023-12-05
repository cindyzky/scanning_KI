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
                    <p class="kategori"><a href="/Categories">Category :</a> <a href="/Categories/{{ $bookDetail->category->slug }}">{{ $bookDetail->category->name }}</a></p>
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
                            <form method="POST" action="{{ route('books.return', ['borrow' => $borrowIds->first()]) }}">
                                @csrf
                                <button type="submit" class="borrow-button">RETURN</button>
                            </form>
                            <!-- WAITING LIST MASIH DIBUAT -->
                            <form method="POST" action="{{ route('books.return', ['borrow' => $bookDetail->id]) }}">
                                @csrf
                                <button type="submit" class="borrow-button">WAITING LIST</button>
                            </form>
                        @endif
                    @else
                        @if ($bookDetail->jumlah_tersedia > 0)
                            <!-- Jika buku belum dipinjam dan jumlah tersedia > 0, tampilkan tombol 'Borrow' -->
                            <form method="POST" action="{{ route('books.borrow', ['book' => $bookDetail->id]) }}">
                                @csrf
                                <button type="submit" class="borrow-button">BORROW</button>
                            </form>
                        @else
                        <!-- WAITING LIST MASIH DIBUAT -->
                            <!-- Jika buku belum dipinjam dan jumlah tersedia = 0, tampilkan tombol 'Waiting List' -->
                            <form method="POST" action="{{ route('books.return', ['borrow' => $bookDetail->id]) }}">
                                @csrf
                                <button type="submit" class="borrow-button">WAITING LIST</button>
                            </form>
                        @endif
                    @endif

                </div>
            </div>
            </article>
            <a href="/BooksData" class="back">Back</a>
        </div>
    
@endsection