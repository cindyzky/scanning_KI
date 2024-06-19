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
        <h2>Add Books</h2>
        <div id="addBooks" class="section-add">
        <div class="col-md-12">
        <form method="POST" action="{{ route('AdminBooks.store') }}" enctype="multipart/form-data" >
            @csrf
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required >

            <label for="category_id">Category</label>
                    <select name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" required >

            <label for="penulis">Author</label>
            <input type="text" name="penulis" class="form-control" required >

            <label for="jumlah_tersedia">Amount</label>
            <input type="number" name="jumlah_tersedia" class="form-control" required >

            <label for="excerpt">Excerpt</label>
            <textarea name="excerpt" class="form-control" required ></textarea>

            <label for="sinopsis">Synopsis</label>
            <textarea name="sinopsis" class="form-control" required ></textarea>



            <label for="image_path" class="mt-3">Upload Book Cover</label>
            <div class="input-group mb-3 ">
            <input type="file" name="image_path" class="form-control" id="inputGroupFile02" required>
            </div>

            <button type="submit" class="change-btn">Save</button>
        </form>
        </div>
    </div>
@endsection
