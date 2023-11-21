<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumsController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard/adddata', function () {
    return view('adddata');
})->middleware(['auth', 'verified'])->name('adddata');

Route::get('/dashboard/updatedata', [AlbumsController::class, 'getAlbumUpdate'])->middleware(['auth', 'verified'])->name('updatedata');
Route::get('/dashboard/updatedata/{uuid}', [AlbumsController::class, 'edit'])->middleware(['auth', 'verified'])->name('updatedata.edit');

Route::post('/dashboard/updatedata', [AlbumsController::class, 'update'])->name('updatedata.update');
Route::post('/dashboard/adddata', [AlbumsController::class, 'store'])->name('adddata.store');

Route::post('/dashboard/updatedata/up', [AlbumsController::class, 'update'])->middleware(['auth', 'verified'])->name('album.update');
Route::post('/dashboard/adddata/up', [AlbumsController::class, 'store'])->middleware(['auth', 'verified'])->name('album.add');

Route::get('/dashboard/adddata/success', function (){
    return view('succadd');
})->middleware(['auth', 'verified'])->name('succadd');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/album', [AlbumsController::class, 'getAlbum'])->name('album');







require __DIR__.'/auth.php';
