<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

Route::get('/', [App\Http\Controllers\HomeController::class, 'inbox'])->name('inbox');

Auth::routes();

Route::get('/compose', [App\Http\Controllers\HomeController::class, 'compose'])->name('compose');
Route::get('/read', [App\Http\Controllers\HomeController::class, 'read'])->name('home');
