<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route unauthenticated users to the home page
Route::get('/', [MovieController::class, 'index'])->name('home');
Route::get('/movies/{id}', [MovieController::class, 'show'])->name('show.movie');

// Route unauthorized users to the home page to search for movies
Route::get('/search', [SearchController::class, 'index'])->name('search');

// Route authenticated users to the dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    // Route for the CRUD user profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/movies/api', [AdminController::class, 'displayFromApi'])->name('movies.api');
    Route::post('/admin/movies', [AdminController::class, 'store'])->name('store.movie');
    Route::get('/admin/movies/{id}', [AdminController::class, 'show'])->name('show.movie.admin');
    Route::patch('/admin/movies/{id}', [AdminController::class, 'update'])->name('update.movie');
    Route::delete('/admin/movies/{id}', [AdminController::class, 'destroy'])->name('destroy.movie');
});

require __DIR__ . '/auth.php';
