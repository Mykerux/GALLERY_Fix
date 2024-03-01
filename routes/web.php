<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LoginAdmin;
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
    return view('login');
});

Route::middleware(['auth'])->group(function() {

    // Gallery
    Route::resource('gallery', GalleryController::class);   
    
    Route::get('profile', [AuthController::class, 'profile'])->name('profile');   

});

// ADMIN
Route::resource('admin', AdminController::class)->middleware('auth');
Route::get('status/{id}', [AdminController::class, 'destroy'])->middleware('auth');
Route::get('accimage', [AdminController::class, 'accImage'])->middleware('auth');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'postLogin'])->name('postlogin');

Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'postRegister'])->name('postregister');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');