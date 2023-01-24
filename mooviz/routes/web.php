<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/movies/api', [MovieController::class, 'displayFromApi'])->name('moviesApi');

    Route::post('/movies', [MovieController::class, 'store'])->name('store.movie');
    Route::get('/movies', [MovieController::class, 'index'])->name('movies');
    Route::get('/movies/{id}', [MovieController::class, 'show'])->name('show.movie');
    Route::patch('/movies/{id}', [MovieController::class, 'update'])->name('update.movie');
    Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('destroy.movie');
});

require __DIR__ . '/auth.php';
