<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\admin\AuthController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/culture', [HomeController::class, 'culture'])->name('culture');
Route::get('/goverment', [HomeController::class, 'goverment'])->name('goverment');
Route::get('/travel', [HomeController::class, 'travel'])->name('travel');
Route::get('/social', [HomeController::class, 'social'])->name('social');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/apparatus', [HomeController::class, 'apparatus'])->name('apparatus');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/article/{id}', [NewsController::class, 'article'])->name('article');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/addforum', [ForumController::class, 'add'])->name('addforum');

// admin route
Route::get('/admin', [AuthController::class, 'index'])->name('admin');
