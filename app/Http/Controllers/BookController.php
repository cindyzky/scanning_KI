<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        $books = Book::query()->when($search, function ($query, $search) {
                    return $query->filter(request(['search', 'category']));})->orderBy('title', 'asc')->paginate(7)->withQueryString();
    
        return view('booksData', compact('books'), [
            "title" => "Books Katalog"
        ]);
        
    }

    public function indexHome()
    {
        $books = Book::all();
        return view('homepage', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('books.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'penulis' => 'required|max:255',
            'excerpt' => 'required',
            'sinopsis' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->image_path->extension();
        $request->image_path->move(public_path('images'), $imageName);

        $book = new Book();
        $book->title = $validatedData['title'];
        $book->penulis = $validatedData['penulis'];
        $book->excerpt = $validatedData['excerpt'];
        $book->sinopsis = $validatedData['sinopsis'];
        $book->image_path = $imageName;
        $book->save();

        return redirect('/BooksData')->with('success', 'Book created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $detail)
    {
        $borrows = Auth::user()->borrows()->pluck('book_id');
        $user = Auth::user();

        $borrowIds = $user->borrows()->where('book_id', $detail->id)->pluck('id');
        return view('bookDetails', [
            "title" => "Details",
            "bookDetail" => $detail,
            "borrowIds" => $borrowIds,
            "borrows" =>$borrows
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
