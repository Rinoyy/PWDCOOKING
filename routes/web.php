<?php

use App\Http\Controllers\createController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\favoritController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\ricipeController;
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

// DASHBOARD CONTROLLER
Route::get('/', [DashboardController::class,  'index'])->name('posts.landingpage');
Route::get('/dashboard', [DashboardController::class,  'dashboard'])->name('dashboard');


// LOGIN CONTROLLER
Route::get('/tampilLogin', [LoginController::class, 'tampil'])->name('tampil');
Route::post('/login', [LoginController::class, 'proses'])->name('login');
// Route::get('/register', [LoginController::class, 'register'])->name('posts.register');

// RICIPE CONTROLLER
Route::get('/resep', [ricipeController::class, 'resep'])->name('posts.resep');
Route::get('/favorit', [favoritController::class, 'favorit'])->name('posts.favorit');

// CREATE CONTROLLER
Route::get('view/{Id_resep}', [createController::class, 'show'])->name('create.view');
Route::get('create', [createController::class, 'create'])->name('create.create');
Route::post('storeSep', [createController::class, 'store'])->name('storeSep');
Route::post('index', [createController::class, 'index'])->name('index');

// REGISTER CONTROLLER  
Route::get('registerREG', [registerController::class, 'register'])->name('register');
Route::post('store', [registerController::class, 'store'])->name('store');
