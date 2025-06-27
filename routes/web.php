<?php

use Illuminate\Support\Facades\Route;
use App\HTTP\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('index');
// });


Route::view('/','index')->name('home');

// Route::get('/query', [ContactController::class, 'index'])->name('query');
// Route::post('/query', [ContactController::class, 'query'])->name('query');








