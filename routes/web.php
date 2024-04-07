<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CalendarGroupController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/profile', [PageController::class, 'profile'])->name('profile');

Route::get('/account', [AccountController::class, 'index'])->name('account');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/login',   [AuthController::class, 'login'])->name('login');
Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::get('/forgot',  [AuthController::class, 'forgot'])->name('forgot');

Route::get('/group', [GroupController::class, 'index'])->name('group');


Route::get('/calendar', [CalendarGroupController::class, 'index'])->name('calendar');
