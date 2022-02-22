<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\Auth;

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

Route::get('/', 'WelcomeController@index');

Route::resource('welcome', 'WelcomeController');

Route::resource('post', 'PostController');
// Route::resource('test', TestController::class);

Route::auth();
/*
Auth::routes();*/

//Route::get('about.us', 'FrontController@aboutUs');
//Route::get('sign.in', 'FrontController@signIn');


Route::get('/about.us', [App\Http\Controllers\FrontController::class, 'aboutUs'])->name('about.us');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
