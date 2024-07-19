<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CreateController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\UserAccountController;

// Route::get('/login', function () {
//     // return view('welcome');
//     return inertia('Index/Login');
// });

// Route::get('/signup', function () {
//     // return view('welcome');
//     return inertia('Index/SignUp');
// });

Route::get('login', [AuthController::class, 'create'])
  ->name('login');
Route::post('login', [AuthController::class, 'store'])
  ->name('login.store');
Route::delete('logout', [AuthController::class, 'destroy'])
  ->name('logout');

  Route::resource('index', IndexController::class)
->only(['index','create', 'store', 'edit', 'update', 'destroy']);
// ->middleware('auth');
// Route::resource('index', IndexController::class)
// ->except(['index','create', 'store', 'edit', 'update', 'destroy']);

// Route::resource('user-account', UserAccountController::class) -> only(['index','create','store']);
Route::get('create-acc', [UserAccountController::class, 'create'])->name('create-acc');
Route::get('log-acc', [UserAccountController::class, 'index'])->name('log-acc');
Route::post('log-store', [UserAccountController::class, 'store'])->name('log-store');

Route::get('create', [CreateController::class, 'create'])->name('create');
Route::post('store', [CreateController::class, 'store'])->name('store');
  
// Route::post('login', [AuthController::class, 'store'])
//   ->name('login.store');
// Route::delete('logout', [AuthController::class, 'destroy'])
//   ->name('logout');
