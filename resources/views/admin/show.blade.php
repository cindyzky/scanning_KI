@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Books</span>
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
            @if($book->image_path)
                    @if(Str::startsWith($book->image_path, 'book_covers'))
                        <img src="{{ asset('storage/' . $book->image_path) }}" alt="{{ $book->title }}" style="max-width: 200px; height: auto;">
                    @else
                        <img src="{{ asset($book->image_path) }}" alt="{{ $book->title }}" style="max-width: 200px; height: auto;">
                    @endif
                @endif
                <div class="book-info">
                    <h2>{{ $book->title }}</h2>
                    <p class="id">Number Id: {{ $book->id }}</p>
                    <p class="author">Author: {{ $book->penulis }}</p>
                    <p class="kategori">Category: {{ $book->category->name }}</p>
                    <p class="jumlah_tersedia">Amount: {{ $book->jumlah_tersedia }} books</p>
                    <p class="sinopsis">Sinopsis: {{ $book->sinopsis }}</p>

                </div>
            </div>
            </article>
            <a href="/AdminBooks" class="back">Back</a>
            <a href="/AdminBooks/{{ $book->slug }}/edit" class="btn" style="background-color: #ffc107; color: white; border: none; border-radius: 12px; padding: 10px 20px; transition: background-color 0.3s ease;"><i class="fa-regular fa-pen-to-square"></i>Edit</a>
            <form action="/AdminBooks/{{ $book->slug }}" method="POST" style="display: inline;">
                  @method('delete')
                  @csrf
                  <button type="submit" class="btn" style="background-color: #dc3545; color: white; border: none; border-radius: 12px; padding: 10px 20px; transition: background-color 0.3s ease;"  onclick="return confirm('Are you sure?')"><i class="fa-regular fa-circle-xmark"></i> Delete</button>
                </form>
        </div>
@endsection