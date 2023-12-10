@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">History</span>
@endsection

@section('content')
    @if($histories->isEmpty())
        <div class="not-found">
            <h1>You haven't borrow any book</h1>
        </div>
    @else
    <div class="books" id='borrowedBooks'>
        <article>
        <h1>Borrowing History</h1>
        @foreach($histories as $history)
        <div class="book-item">
            <div class="book-details">
                <img src="{{ asset($history->book->image_path) }}" alt="{{ $history->book->title }}" style="max-width: 200px; height: auto;">
                <div class="book-info">
                    <h3><a href="/BookDetails/{{ $history->book->slug }}">{{ $history->book->title }}</a></h3>
                    <p class="author">Author: {{ $history->book->penulis }}</p>
                    <p class="excerpt">{{ $history->book->excerpt }}</p>
                    <a href="/BookDetails/{{ $history->book->slug }}">Read More...</a><br><br>
                    <p class="history borrowed_at">Borrowed At : {{ $history->borrowed_at }}</p>
                    <p class="history returned_at">Returned At : {{ $history->returned_at }}</p>
                </div>
            </div>
        </div>
        </article>
    @endforeach
    <div class="pagination">
            {{ $histories->links() }}
    </div>
    @endif

@endsection