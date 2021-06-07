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

//Route::get('/', function () {
//    return view('pages.index');
//});

Route::get('/', [\App\Http\Controllers\BlogController::class, 'index']);
Route::get('/category/{slug}', [\App\Http\Controllers\BlogController::class, 'getPostsByCategory'])->name('getPostsByCategory');
Route::get('/category/{slug_category}/{slug_post}', [\App\Http\Controllers\BlogController::class, 'getPost'])->name('getPost');

