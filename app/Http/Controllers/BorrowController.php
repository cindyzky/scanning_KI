<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Models\Book;
use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;


class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $borrows = Borrow::with('book')->get();
        dd($borrows); 
        return view('borrowedBooks', [
            'title' => 'Borrowed Books',
            'borrows' => $borrows
        ]);
    }

    public function borrow(Request $request, Book $book)
    {
        $borrow = new Borrow();
        $borrow->user_id = auth()->user()->id;
        $borrow->book_id = $book->id;
        $borrow->borrowed_at = Carbon::now();
        $borrow->save();

        return redirect('/BorrowedBooks');
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
    public function show(Borrow $borrow)
    {
        //
    }

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
