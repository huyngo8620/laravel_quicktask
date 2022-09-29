<?php

use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('users', UserController::class);

Route::prefix('posts')->name('posts')->controller(PostController::class)->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('create', 'create')->name('create');
    Route::post('', 'store')->name('store');
    Route::get('{post}', 'show')->name('show');
    Route::get('{post}/edit', 'edit')->name('edit');
    Route::put('{post}', 'update')->name('update');
    Route::delete('{post}', 'destroy')->name('destroy');
});
