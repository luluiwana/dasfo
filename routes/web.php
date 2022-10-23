<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\UploadFile;

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
Route::post('/insert_forum', [ForumController::class, 'insert'])->name('insert_forum');
Route::post('/upload_image', [UploadFile::class, 'uploadImage'])->name('uploadImage');


// admin route
Route::get('/auth', [AuthController::class, 'index'])->name('auth');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
