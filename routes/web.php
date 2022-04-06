<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ModeradorController;

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
//     return view('/home');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/auth.register', [App\Http\Controllers\AdminController::class, 'index'])->name('register');
Route::get('/register', [App\Http\Controllers\AdminController::class, 'index'])->name('register');

// Route::post('/register', function () {
//     return view('auth.register');
// });

Route::resource('/users', UserController::class);

Route::resource('/moders', ModeradorController::class);
