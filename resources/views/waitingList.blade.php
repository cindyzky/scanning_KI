@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Waiting List</span>
@endsection

@section('content')
    @if(session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($waitList->isEmpty())
    <div class="not-found">
        <h1>You haven't added any books to the Waiting List</h1>
    </div>
    @else
    <div class="books" id='waitingList'>
    <article>
    <h1>Waiting List</h1>
    @foreach($waitList as $waitingList)
    <div class="book-item">
        <div class="book-details">
            <img src="{{ asset($waitingList->book->image_path) }}" alt="{{ $waitingList->book->title }}" style="max-width: 200px; height: auto;">
            <div class="book-info">
                <h3><a href="/BookDetails/{{ $waitingList->book->slug }}">{{ $waitingList->book->title }}</a></h3>
                <p class="author">Author: {{ $waitingList->book->penulis }}</p>
                <p class="excerpt">{{ $waitingList->book->excerpt }}</p>
                <a href="/BookDetails/{{ $waitingList->book->slug }}">Read More...</a>
                <form method="POST" action="{{ route('books.removeWaitlist', ['id' => $waitingList->id]) }}">
                    @csrf
                    <button type="submit" class="waiting-list-button">REMOVE WAITING LIST</button>
                </form>
            </div>
        </div>
    </div>
    </article>
    @endforeach
    @endif

@endsection