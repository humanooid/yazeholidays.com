<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ArticleController;
use Illuminate\Contracts\Auth\SupportsBasicAuth;
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

Route::get('/home', [HomeController::class, 'index'])->name('home.index');
Route::get('/', [HomeController::class, 'curtain'])->name('home.curtain');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin')->middleware('admin');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout');
Route::get('/register', [AuthController::class, 'indexregist'])->name('register');
Route::post('/actionregist', [AuthController::class, 'actionregist'])->name('actionregist');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/articles', [ArticleController::class, 'store'])->name('article.store');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('article.update');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('article.destroy');
Route::get('/articles/{article}/detail', [ArticleController::class, 'detail'])->name('article.detail');