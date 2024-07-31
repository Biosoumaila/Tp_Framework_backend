<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/delete-author/{id}', [AuthorController::class,'delete_author']);
Route::get('/update-author/{id}', [AuthorController::class,'update_author']);
Route::post('/update/traitement', [AuthorController::class,'update_author_traitement']);
Route::get('/author', [AuthorController::class,'list_author']);
Route::get('/ad', [AuthorController::class,'add_author']);
Route::post('/ad/traitement', [AuthorController::class,'add_author_traitement']);

Route::get('/delete-book/{id}', [BookController::class,'delete_book']);
Route::get('/update-book/{id}', [BookController::class,'update_book']);
Route::post('/update/traitement', [BookController::class,'update_book_traitement']);
Route::get('/book', [BookController::class,'list_book']);
Route::get('/add', [BookController::class,'add_book']);
Route::post('/add/traitement', [BookController::class,'add_book_traitement']);