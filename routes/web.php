<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\VersionController;
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

Route::get('/cars', [CarController::class, 'index'])->name('cars.index')->middleware('admin');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create')->middleware('admin');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store')->middleware('admin');
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show')->middleware('admin');
Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit')->middleware('admin');
Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update')->middleware('admin');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy')->middleware('admin');

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index')->middleware('admin');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('article.create')->middleware('admin');
Route::post('/articles', [ArticleController::class, 'store'])->name('article.store')->middleware('admin');
Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit')->middleware('admin');
Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('article.update')->middleware('admin');
Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('article.destroy')->middleware('admin');
Route::get('/articles/{article}/detail', [ArticleController::class, 'detail'])->name('article.detail');

Route::get('/informations', [InformationController::class, 'index'])->name('info.index')->middleware('admin');
Route::get('/informations/create', [InformationController::class, 'create'])->name('info.create')->middleware('admin');
Route::post('/informations', [InformationController::class, 'store'])->name('info.store')->middleware('admin');
Route::get('/informations/{information}/edit', [InformationController::class, 'edit'])->name('info.edit')->middleware('admin');
Route::put('/informations/{information}', [InformationController::class, 'update'])->name('info.update')->middleware('admin');
Route::delete('/informations/{information}', [InformationController::class, 'destroy'])->name('info.destroy')->middleware('admin');

Route::get('/versions', [VersionController::class, 'index'])->name('version.index')->middleware('admin');