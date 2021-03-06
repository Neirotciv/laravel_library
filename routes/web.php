<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NavController;
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

// Route::get('/market', function () {
//     return view('market');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });

Route::get('/', [NavController::class, 'welcomePage']);
Route::get('/market', [NavController::class, 'marketPage']);
Route::get('/contact', [NavController::class, 'contactPage']);
Route::get('/form', [NavController::class, 'contactPage']);
Route::resource('/library', BookController::class);
Route::get('/create', [BookController::class, 'create']);
Route::post('/store', [BookController::class, 'store']);