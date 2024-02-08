<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
 //   return view('welcome');
//});

Route::get('/', [ArticleController::class,'landing'])->name('landing');

Route::get('/index', [ArticleController::class,'index'])
    ->middleware(['auth', 'verified'])->name('index');

Route::get('/create', [ArticleController::class,'create'])
    ->middleware(['auth', 'verified'])->name('create');

Route::get('/edit-article/{id}', [ArticleController::class,'edit'])
    ->middleware(['auth', 'verified'])->name('edit');

Route::put('/update-article/{id}', [ArticleController::class,'update'])
    ->middleware(['auth', 'verified'])->name('update');

Route::delete('/delete-article/{id}', [ArticleController::class,'destroy'])
    ->middleware(['auth', 'verified'])->name('destroy');

Route::post('/form-submit', [ArticleController::class,'store'])
    ->middleware(['auth', 'verified'])->name('form-submit');

Route::get('/read-article/{id}', [ArticleController::class,'read'])->name('read');


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';