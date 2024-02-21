<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookStore::class, 'books']);
Route::get('/BookStore', [BookStore::class, 'books']);


