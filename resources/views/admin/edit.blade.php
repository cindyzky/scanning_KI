@extends('layouts.main')

@section('content')
<h2>Edit Book</h2>

<form method="POST" action="/AdminBooks/{{ $book->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" required autofocus value="{{ old('title', $book->title) }}" >
    </div>

    <div class="form-group">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($categories as $category)
                <option value="{{ $category->id }}" {{ $category->id == $book->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="slug">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{ old('slug', $book->slug) }}" required>
    </div>

    <div class="form-group">
        <label for="penulis">Author</label>
        <input type="text" name="penulis" id="penulis" class="form-control" value="{{ old('penulis', $book->penulis) }}" required>
    </div>

    <div class="form-group">
        <label for="jumlah_tersedia">Amount</label>
        <input type="number" name="jumlah_tersedia" id="jumlah_tersedia" class="form-control" value="{{ old('jumlah_tersedia', $book->jumlah_tersedia) }}" required>
    </div>

    <div class="form-group">
        <label for="excerpt">Excerpt</label>
        <textarea name="excerpt" id="excerpt" class="form-control" required>{{ old('excerpt', $book->excerpt) }}</textarea>
    </div>

    <div class="form-group">
        <label for="sinopsis">Synopsis</label>
        <textarea name="sinopsis" id="sinopsis" class="form-control" required>{{ old('sinopsis', $book->sinopsis) }}</textarea>
    </div>

    <div class="form-group mt-3">
        <label for="image_path">Cover Image</label>
        <input type="file" name="image_path" id="image_path" class="form-control">
        @if($book->image_path)
            <img src="{{ asset('storage/' . $book->image_path) }}" alt="{{ $book->title }}" style="max-width: 200px; height: auto;">
        @endif
    </div>

    <button type="submit" class="btn btn-primary">Update Book</button>
</form>
@endsection
