<?php

use App\Http\Controllers\NoteController;
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

Route::get('/', function () {
    return view('welcome');
});


/* Login & Registrations */
Route::get('/login', function () {
    return view('auth.login');
});

Route::get('/register', function () {
    return view('auth.register');
});


Route::get('/', function () {
    return view('homepage');
})->name('/');


Route::get('/notes',[NoteController::class,'index'])->name('notes');
Route::get('/notes/create',[NoteController::class,'create'])->name('create_notes');
Route::get('/notes/edit/laravel-post',[NoteController::class,'edit'])->name('edit_notes');


Route::get('/notes/laravel-project', function () {
    return view('welcome');
});


