<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::put('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.destroy');
Route::post('/checkout', 'PostController@checkout')->name('checkout');
Route::get('/success', 'PostController@success')->name('success');

// Route::get('/post', [App\Http\Controllers\PostController::class, 'index'])->name('post.index');
// Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
// Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');
