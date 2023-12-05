<?php

namespace App\Http\Controllers;

use App\Models\WaitingList;
use App\Models\Book;
use Illuminate\Http\Request;
use Carbon\Carbon;

class WaitingListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $waitList = WaitingList::all();
        return view('waitingList', [
            'title' => 'Waiting List',
            'waitList' => $waitList
        ]);
    }

    public function waitList(Request $request, Book $book)
    {
        if($book->jumlah_tersedia == 0){
            $waitingList= new WaitingList();
            $waitingList->user_id = auth()->user()->id;
            $waitingList->book_id = $book->id;
            $waitingList->added_at = now();
            $waitingList->save();


            return redirect('/WaitingList')->with('success', "You have successfully added {$book->title} to the waitlist"); 
        }
         
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(WaitingList $waitingList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(WaitingList $waitingList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, WaitingList $waitingList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(WaitingList $waitingList)
    {
        //
    }
}
