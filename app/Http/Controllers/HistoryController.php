<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Book;
use App\Models\Borrow;
use App\Http\Requests\StoreHistoryRequest;
use App\Http\Requests\UpdateHistoryRequest;
use Illuminate\Http\Request;
use Carbon\Carbon;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories = History::where('user_id', auth()->user()->id)->orderBy('returned_at', 'desc')->paginate(5);
        return view('history', [
            'title' => 'Borrowing History',
            'histories' => $histories
        ]);
    }

    public function return($borrowId)
    {
        $borrow = Borrow::findorFail($borrowId);
        $book = $borrow->book;

        $book->jumlah_tersedia++;
        $book->save();

        $histories = new History();
        $histories->user_id = auth()->user()->id;
        $histories->book_id = $book->id;
        $histories->borrowed_at = $borrow->borrowed_at;
        $histories->returned_at = now();
        $histories->save();
        
        $borrow->delete();

        return redirect('/BorrowedBooks')->with('success', 'Book returned successfully!');
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
    public function store(StoreHistoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(History $history)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(History $history)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHistoryRequest $request, History $history)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(History $history)
    {
        //
    }
}
