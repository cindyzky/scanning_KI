@extends('layouts.main')

@section('sidebar-button')
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Borrowed Books</span>
@endsection

@section('content')
    <div class="content">
        <h1>List of Borrowed Books</h1>

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->penulis }}</td>
                        <td>{{ $book->excerpt }}</td>
                        <td>{{ $book->sinopsis }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection