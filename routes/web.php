<?php

use Illuminate\Support\Facades\Route;
use App\Models\News;
use App\Http\Controllers\NewsController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('news', [NewsController::class, 'index']);

Route::get('news/{id}', [NewsController::class, 'getNews'])->name('news-detail');

Route::get('signup', function() {
    return view('signup');
});

Route::get('login', function() {
    return view('login');
});

// Route::get('news/{category}')