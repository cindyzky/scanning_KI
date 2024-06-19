<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AdminBooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $this->authorize('admin');
        return view('admin.index', [
            "title" => "Books",
            "books" => Book::all()
        ]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.create', [
            "title" => "Add Books",
            "categories" => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'slug' => 'required|unique:books,slug',
            'penulis' => 'required|max:255',
            'jumlah_tersedia' => 'required|integer',
            'excerpt' => 'required',
            'sinopsis' => 'required',
            'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imagePath = $request->file('image_path')->store('book_covers', 'public');

        $book = Book::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
            'penulis' => $request->penulis,
            'jumlah_tersedia' => $request->jumlah_tersedia,
            'excerpt' => $request->excerpt,
            'sinopsis' => $request->sinopsis,
            'image_path' => $imagePath,
        ]);

         $this->updateBookSeeder($book);

        return redirect('/AdminBooks')->with('success', 'Book added successfully!');
        
    }

    private function updateBookSeeder($book)
    {
        $seederPath = database_path('seeders/DatabaseSeeder.php');
        $seederContent = File::get($seederPath);

        $newBookEntry = "
            Book::create([
                'title' => '{$book->title}',
                'category_id' => {$book->category_id},
                'slug' => '{$book->slug}',
                'penulis' => '{$book->penulis}',
                'jumlah_tersedia' => {$book->jumlah_tersedia},
                'excerpt' => '{$book->excerpt}',
                'sinopsis' => '{$book->sinopsis}',
                'image_path' => '{$book->image_path}',
            ]);
        ";

        if (strpos($seederContent, '// Book seeds') !== false) {
            $seederContent = str_replace('// Book seeds', $newBookEntry . PHP_EOL . '        // Book seeds', $seederContent);
            File::put($seederPath, $seederContent);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($slug)
    {
        $book=Book::where('slug', $slug)->firstOrFail();

        return view('admin.show', [
            'title' => 'Book Details',
            'book' => $book
        ]);
    }
   

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $book=Book::where('slug', $slug)->firstOrFail();
        return view('admin.edit', [
            'title' => 'Edit Book',
            'book' => $book,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        $book = Book::where('slug', $slug)->firstOrFail();

        $rules = [
            'title' => 'required|max:255',
            'category_id' => 'required|exists:categories,id',
            'penulis' => 'required|max:255',
            'jumlah_tersedia' => 'required|integer',
            'excerpt' => 'required',
            'sinopsis' => 'required',
            'image_path' => 'sometimes|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];

        if ($request->slug != $book->slug) {
            $rules['slug'] = 'required|unique:books,slug';
        }

        $validatedData = $request->validate($rules);

        if ($request->hasFile('image_path')) {
            // Hapus gambar lama
            if ($book->image_path) {
                Storage::disk('public')->delete($book->image_path);
            }
            // Simpan gambar baru
            $imagePath = $request->file('image_path')->store('book_covers', 'public');
        } else {
            $imagePath = $book->image_path;
        }

        $book->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'slug' => $request->slug,
            'penulis' => $request->penulis,
            'jumlah_tersedia' => $request->jumlah_tersedia,
            'excerpt' => $request->excerpt,
            'sinopsis' => $request->sinopsis,
            'image_path' => $imagePath,
        ]);

        return redirect('/AdminBooks')->with('success', 'Book updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $book=Book::where('slug', $slug)->firstOrFail();
        // Hapus gambar jika ada
        if ($book->image_path) {
            Storage::disk('public')->delete($book->image_path);
        }

        $book->delete();

        return redirect('/AdminBooks')->with('success', 'Book deleted successfully!');
    }
}
