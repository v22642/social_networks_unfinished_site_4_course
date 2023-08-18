<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\RegistrationPost;
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

// Route::view('/home', 'home')->name('home');
Route::get('/logo', [RegistrationController::class, 'v'])->name('logo');
Route::post('/logo', [RegistrationController::class, 'logo']);
Route::view('/messendher', 'mes')->name('mes');
Route::view('/friends', 'friends')->name('friends');




Route::get('/v', [RegistrationController::class, 'v'])->name('v');

Route::get('/create-post', [RegistrationPost::class, 'index'])->name('create-post');
Route::post('/create-post', [RegistrationPost::class, 'store']);

Route::get('/home', [RegistrationPost::class, 'home'])->middleware('auth')->name('home');
Route::get('/index', [RegistrationPost::class, 'index_home'])->name('index');

// Route::post('/home', [RegistrationPost::class, 'home'])->middleware('auth')->name('home');

Route::get('/register', [RegistrationController::class, 'index'])->name('register');
Route::post('/register', [RegistrationController::class, 'store']);
