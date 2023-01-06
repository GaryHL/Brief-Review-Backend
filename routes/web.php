<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;



Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->name('register.store');




Route::get('/login', [SessionsController::class, 'create'])->middleware('guest')->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])->name('login.store');

Route::get('/post', [SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

// As 'auth.admin' route doesn't exist we've to created into kernel.php file
Route::get('/admin', [AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
