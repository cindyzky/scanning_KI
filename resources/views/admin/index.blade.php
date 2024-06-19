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
<h2 class="mb-3">Ruang Baca Books</h2>

<a href="/AdminBooks/create" class="borrow-button mb-5" style="text-decoration: none;">Add Books</a>
      <div class="table-responsive col-lg-12 pr-5 mt-4" >
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Title</th>
              <th scope="col">Author</th>
              <th scope="col">Category</th>
              <th scope="col" class="action-column">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($books as $book)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $book->title }}</td>
              <td>{{ $book->penulis }}</td>
              <td>{{ $book->category->name }}</td>
              <td>
                <a href="/AdminBooks/{{ $book->slug }}" class="badge bg-info"><i class="fa-regular fa-eye"></i></a>
                <a href="/AdminBooks/{{ $book->slug }}/edit" class="badge bg-warning"><i class="fa-regular fa-pen-to-square"></i></a>
                <form action="/AdminBooks/{{ $book->slug }}" method="POST" style="display: inline;">
                  @method('delete')
                  @csrf
                  <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i class="fa-regular fa-circle-xmark"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection