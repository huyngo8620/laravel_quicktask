<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::resource('users', UserController::class)->middleware('admin');
//User
Route::prefix('users')->name('users.')->controller(UserController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::get('{id}', 'show')->name('show');
    Route::get('{id}/edit', 'edit')->name('edit');
    Route::post('', 'store')->name('store');
    Route::put('{id}', 'update')->name('update');
    Route::delete('{id}', 'destroy')->name('destroy');
});

//Post
Route::prefix('posts')->name('posts.')->controller(PostController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('', 'store')->name('store');
    Route::get('{post}', 'show')->name('show');
    Route::get('{post}/edit', 'edit')->name('edit');
    Route::put('{post}', 'update')->name('update');
    Route::delete('{post}', 'destroy')->name('destroy');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('localization')->name('home');

Route::get('language/{lang}', [LanguageController::class, 'changeLanguage'])->middleware('localization')->name('language');
