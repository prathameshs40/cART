<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;


// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CartController::class, 'index'])->name('index');