<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('homepage');
})->name('/');


/* Login & Registrations */
Route::get('/login/guest', [AuthController::class, 'loginAsGuest'])->name('login.guest');

Route::get('/login',[AuthController::class,'login'])->name('login');
Route::get('/signup',[AuthController::class,'showRegistrationForm'])->name('signup');
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


/* Notes Related Routes */
Route::get('/notes',[NoteController::class,'index'])->name('notes');
Route::get('/notes/create',[NoteController::class,'create'])->name('create_notes');
Route::get('/notes/edit/laravel-post',[NoteController::class,'edit'])->name('edit_notes');

// upload featured images to public/media dir
Route::post('/upload',[NoteController::class,'upload'])->name('ckeditor.upload');
Route::post('/notes/create',[NoteController::class,'store'])->name('notes.store');

Route::get('/notes/laravel-project', function () {
    return view('welcome');
});


/* Category Related Routes */
Route::get('/category',[CategoryController::class,'list'])->name('category.list');
Route::get('/category/create',[CategoryController::class,'showCreateCategoryPage'])->name('category.create');
Route::post('/category/create',[CategoryController::class,'storeCategory'])->name('category.store');
Route::get('/category/edit/{id}',[CategoryController::class,'editCategory'])->name('category.edit');
Route::put('/category/update/{id}',[CategoryController::class,'updateCategory'])->name('category.update');


