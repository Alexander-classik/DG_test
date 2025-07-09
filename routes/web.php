<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\NewsFeedbacksController;


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

Route::get('/', [NewsController::class, 'index'])->name('/');
Route::get('/add-news', [NewsController::class, 'add']);
Route::get('/show-news', [NewsController::class, 'all_index']);

Route::post('main', [NewsController::class, 'store']);

Route::get('/feedback', [NewsFeedbacksController::class, 'add'])->name('fb.add');
Route::post('/feedback', [NewsFeedbacksController::class, 'store'])->name('fb.store');
