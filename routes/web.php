<?php

use Illuminate\Routing\Controller;

use App\Http\Controllers\createController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\favoritController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\ricipeController;
use App\Http\Controllers\SimpanController;
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


// LOGIN CONTROLLER
Route::get('/login', [LoginController::class, 'proses'])->name('login');
Route::post('/tampilLogin', [LoginController::class, 'tampil'])->name('tampil');
// Route::get('/register', [LoginController::class, 'register'])->name('posts.register');





Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


Route::get('/dashboard', [DashboardController::class,  'dashboard'])->name('dashboard');


// RICIPE CONTROLLER
Route::get('/resep', [ricipeController::class, 'resep'])->name('posts.resep');
Route::get('/Viewfavorit', [SimpanController::class, 'index'])->name('posts.Viewfavorit');
Route::post('/favorit/{id_resep}', [SimpanController::class, 'simpanResep'])->name('posts.favorit');
Route::get('/detail/{id_resep}', [SimpanController::class, 'detailResep'])->name('posts.detail');
// Route::post('/simpan-resep/{id_resep}', [SimpanController::class, 'favorit'])->name('posts.favorit');


Route::get('/akun', [favoritController::class, 'akun'])->name('posts.akun');
Route::post('/hapus/{id_resep}', [favoritController::class, 'hapus'])->name('hapus');
Route::get('/edit/{id_resep}', [favoritController::class, 'edit'])->name('edit');
Route::put('/update/{id_resep}', [favoritController::class, 'update'])->name('update');
// Route::post('/update', [favoritController::class, 'update'])->name('update');

// CREATE CONTROLLER
Route::get('view/{id_resep}', [createController::class, 'show'])->name('create.view');
Route::get('create', [createController::class, 'create'])->name('create.create');
Route::post('storeSep', [createController::class, 'store'])->name('storeSep');
Route::post('index', [createController::class, 'index'])->name('index');

Route::post('/simpan/{id_resep}', [SimpanController::class, 'simpanResep'])->name('simpanResep');
Route::get('/simpan', [SimpanController::class, 'index'])->name('simpan.index');


// REGISTER CONTROLLER  
Route::get('registerREG', [registerController::class, 'register'])->name('register');
Route::post('store', [registerController::class, 'store'])->name('store');




// Route::post('/simpan/tambah', [SimpanController::class, 'tambahsimpan'])->name('simpan.tambah');
// Route::get('/simpan', [SimpanController::class, 'index'])->name('simpan.index');
// Route::post('/simpan-favorit/{id_resep}', [SimpanController::class, 'simpanFavorit'])->name('simpanFavorit');
