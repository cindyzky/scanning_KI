<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::orderBy('borrowed_at', 'desc')->get();
        return view('borrowedBooks', [
            'title' => 'Borrowed Books',
            'borrows' => $borrows
        ]);
    }

    public function borrow(Request $request, Book $book)
    {
        if($book->jumlah_tersedia > 0){
            $borrow = new Borrow();
            $borrow->user_id = auth()->user()->id;
            $borrow->book_id = $book->id;
            $borrow->borrowed_at = now();
            $borrow->save();

            $book->jumlah_tersedia--;
            $book->save();

            return redirect('/BorrowedBooks')->with('success', "You have successfully borrow {$book->title}"); 
        }
         

        return back()->with('borrowError', "Borrow Failed! The book {$book->title} are not available right now!");
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBorrowRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBorrowRequest $request, Borrow $borrow)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Borrow $borrow)
    {
        //
    }
}
