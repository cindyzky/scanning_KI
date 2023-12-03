<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
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




