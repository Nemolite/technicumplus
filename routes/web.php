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
Route::get('/news/{id}',[\App\Http\Controllers\MainController::class, 'newsid'])->name('newsid');
/* Маршрут для страницы наши люди */
Route::get('/people',[\App\Http\Controllers\MainController::class, 'people'])->name('people');
/* Маршрут для страницы конкурс */
Route::get('/konkurs',[\App\Http\Controllers\MainController::class, 'konkurs'])->name('konkurs');
/* Маршрут для страницы профессии */
Route::get('/proff',[\App\Http\Controllers\MainController::class, 'proff'])->name('proff');
/* Маршрут для получения id новости и для дальнейшей обработки и вывода*/
//Route::get('/newsid/{id}',[\App\Http\Controllers\MainController::class, 'newsid'])->name('newsid');

/* Маршруты для панеля управления*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/insertnews', [App\Http\Controllers\HomeController::class, 'insertnews'])->name('insertnews');
