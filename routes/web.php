<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('homepage');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/WaitingList', function () {
    return view('waitingList');
});

Route::get('/BorrowedBooks', [BookController::class, 'index']);
Route::get('/BookDetails/{detail:slug}', [BookController::class, 'show']);
Route::get('/Categories/{category:slug}', [CategoryController::class, 'show']);

Route::get('/Categories', [CategoryController::class, 'index']);
// Route::get('/Categories', function () {
//     return view('categories', [
//         'title' => 'All Categories',
//         'categories' => Category::all()
//     ]);
// });

Route::get('/History', function () {
    return view('history');
});

Route::get('/Dashboard', function () {
    return view('dashboard');
});

