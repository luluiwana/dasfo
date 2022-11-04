<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\UploadFile;

use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\DataController;
use App\Http\Controllers\admin\AdminNewsController;
use App\Http\Controllers\admin\AnswerAspirationController;
use App\Http\Controllers\admin\AdminAgendaController;

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
//info
Route::get('/culture', [HomeController::class, 'culture'])->name('culture');
Route::get('/goverment', [HomeController::class, 'goverment'])->name('goverment');
Route::get('/travel', [HomeController::class, 'travel'])->name('travel');
Route::get('/social', [HomeController::class, 'social'])->name('social');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/apparatus', [HomeController::class, 'apparatus'])->name('apparatus');
//data
Route::get('/info/{title}', [HomeController::class, 'info'])->name('info');
Route::get('/gov/{title}', [HomeController::class, 'gov'])->name('gov');
Route::get('/agenda', [HomeController::class, 'agenda'])->name('agenda');
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/article/{id}', [NewsController::class, 'article'])->name('article');
Route::get('/forum', [ForumController::class, 'index'])->name('forum');
Route::get('/addforum', [ForumController::class, 'add'])->name('addforum');
Route::post('/insert_forum', [ForumController::class, 'insert'])->name('insert_forum');
Route::post('/upload_image', [UploadFile::class, 'uploadImage'])->name('uploadImage');



// admin route
Route::get('/auth', [AuthController::class, 'index'])->name('auth');
Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');



Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //get data
    Route::get('/data/{title}', [DataController::class, 'index'])->name('data');
    Route::get('/create_data/{title}', [DataController::class, 'create'])->name('create_data');
    //get data pemerintahan
    Route::get('/govdata/{title}', [DataController::class, 'govdata'])->name('govdata');
    Route::get('/create_govdata/{title}', [DataController::class, 'create_govdata'])->name('create_govdata');
    //create data
    Route::post('/upload_info', [UploadFile::class, 'uploadInfo'])->name('upload_info');
    Route::post('/store_data/{title}', [DataController::class, 'store'])->name('store_data');
    Route::post('/store_data_gov/{title}', [DataController::class, 'store_gov'])->name('store_data_gov');
    //update data
    Route::post('/update_data/{title}', [DataController::class, 'update'])->name('update_data');
    Route::post('/update_header/{title}', [DataController::class, 'updateHeader'])->name('update_header');
    //people
    Route::post('/add_people', [DataController::class, 'add_people'])->name('add_people');
    Route::post('/edit_people/{id}', [DataController::class, 'edit_people'])->name('edit_people');
    Route::get('/delete_people/{id}', [DataController::class, 'delete_people'])->name('delete_people');
    //agenda
    Route::get('/all_agenda', [AdminAgendaController::class, 'index'])->name('all_agenda');
    Route::post('/store_agenda', [AdminAgendaController::class, 'store'])->name('store_agenda');
    Route::get('/delete_agenda/{id}', [AdminAgendaController::class, 'delete'])->name('delete_agenda');
    Route::post('/update_agenda/{id}', [AdminAgendaController::class, 'update'])->name('update_agenda');


    //news
    Route::get('/all_news', [AdminNewsController::class, 'index'])->name('all_news');
    Route::get('/create_news', [AdminNewsController::class, 'create'])->name('create_news');
    Route::post('/store_news', [AdminNewsController::class, 'store'])->name('store_news');
    Route::get('/view/{id}', [AdminNewsController::class, 'view'])->name('view');
    Route::post('/update_news/{id}', [AdminNewsController::class, 'update'])->name('update_news');
    Route::post('/update_thumbnail/{id}', [AdminNewsController::class, 'updateThumbnail'])->name('update_thumbnail');
    Route::get('/delete_news/{id}', [AdminNewsController::class, 'delete'])->name('delete_news');
    //aspiration
    Route::get('/all_aspiration', [AnswerAspirationController::class, 'index'])->name('all_aspiration');
    Route::get('/read/{id}', [AnswerAspirationController::class, 'read'])->name('read');
    Route::post('/answer/{id}', [AnswerAspirationController::class, 'answer'])->name('answer');
    Route::get('/delete_aspiration/{id}', [AnswerAspirationController::class, 'delete'])->name('delete_aspiration');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';
