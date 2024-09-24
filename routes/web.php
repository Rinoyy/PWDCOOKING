<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class,  'index'])->name('posts.landingpage');
Route::get('/dashboard', [DashboardController::class,  'dashboard'])->name('posts.dashboard');
Route::get('/login', [LoginController::class, 'login'])->name('posts.login');
Route::get('/register', [LoginController::class, 'register'])->name('posts.register');
Route::get('/resep', [DashboardController::class, 'resep'])->name('posts.resep');
