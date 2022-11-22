<?php

use Illuminate\Support\Facades\Route;

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

/* Маршрут для главной страницы*/
Route::get('/',[\App\Http\Controllers\MainController::class, 'index'])->name('index');
/* Маршрут для страницы новостей*/
Route::get('/news',[\App\Http\Controllers\MainController::class, 'news'])->name('news');
/* Маршрут для страницы наши люди */
Route::get('/people',[\App\Http\Controllers\MainController::class, 'people'])->name('people');

