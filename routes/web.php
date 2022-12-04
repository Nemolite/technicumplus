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
Route::get('/konkurs/{id}',[\App\Http\Controllers\MainController::class, 'konkursid'])->name('konkursid');
/* Маршрут для страницы профессии */
Route::get('/proff',[\App\Http\Controllers\MainController::class, 'proff'])->name('proff');
/* Маршрут для получения id новости и для дальнейшей обработки и вывода*/
//Route::get('/newsid/{id}',[\App\Http\Controllers\MainController::class, 'newsid'])->name('newsid');

/* Маршруты для панеля управления*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Новости в админке*/
Route::post('/insertnews', [App\Http\Controllers\HomeController::class, 'insertnews'])->name('insertnews');
Route::get('/editnews/{id}',[\App\Http\Controllers\HomeController::class, 'editnews'])->name('editnews');
Route::post('/updatenews',[\App\Http\Controllers\HomeController::class, 'updatenews'])->name('updatenews');
Route::get('/deletenews/{id}',[\App\Http\Controllers\HomeController::class, 'deletenews'])->name('deletenews');
/* Наши люди в админке*/
Route::post('/insertpeople', [App\Http\Controllers\HomeController::class, 'insertpeople'])->name('insertpeople');
Route::get('/editourpeople/{id}',[\App\Http\Controllers\HomeController::class, 'editourpeople'])->name('editourpeople');
Route::post('/updateoneourpeople',[\App\Http\Controllers\HomeController::class, 'updateoneourpeople'])->name('updateoneourpeople');
Route::get('/deleteop/{id}',[\App\Http\Controllers\HomeController::class, 'deleteop'])->name('deleteop');
/* Конкурсы в админке*/
Route::post('/insertkonkurs', [App\Http\Controllers\HomeController::class, 'insertkonkurs'])->name('insertkonkurs');
Route::get('/editkonkurs/{id}',[\App\Http\Controllers\HomeController::class, 'editkonkurs'])->name('editkonkurs');
Route::get('/deletekonkurs/{id}',[\App\Http\Controllers\HomeController::class, 'deletekonkurs'])->name('deletekonkurs');
Route::post('/updatekonkurs',[\App\Http\Controllers\HomeController::class, 'updatekonkurs'])->name('updatekonkurs');




