<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WaitingListController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BookController::class, 'indexHome']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/Dashboard', [DashboardController::class, 'index']);

Route::get('/BooksData', [BookController::class, 'index']);

Route::get('/BorrowedBooks', [BorrowController::class, 'index']);
Route::post('/books/{book}/borrow', [BorrowController::class, 'borrow'])->name('books.borrow');


Route::get('/WaitingList', function () {
    return view('waitingList', [
        "title" => "Waiting List"
    ]);
});
Route::post('/books/{book}/WaitingList', [WaitingListController::class, 'waitList'])->name('books.waitlist');

Route::get('/BookDetails/{detail:slug}', [BookController::class, 'show']);
Route::get('/Categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/Categories', [CategoryController::class, 'index']);

Route::post('/books/return/{borrow}', [HistoryController::class, 'return'])->name('books.return');
Route::get('/History', [HistoryController::class, 'index']);

