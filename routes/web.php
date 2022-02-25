<?php

use App\Http\Controllers\NavController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CustomAuthController;
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

Route::get('/', 'WelcomeController@index');

Route::resource('welcome', 'WelcomeController');

Route::resource('post', 'PostController');

Route::get('/about.us', [App\Http\Controllers\NavController::class, 'aboutUs'])->name('about.us');


// Route::resource('test', TestController::class);

//Route::auth();
/*
Auth::routes();*/

//Route::get('about.us', 'FrontController@aboutUs');
//Route::get('sign.in', 'FrontController@signIn');


Route::get('dashboard', [CustomAuthController::class, 'dashboard']);

Route::get('login', [CustomAuthController::class, 'index'])->name('login');

Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');

Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');

Route::get('signout', [CustomAuthController::class, 'signOut'])->name('sign-out');




//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');
//
//Route::get('admin/home', [HomeController::class, 'adminHome'])->
//name('admin.home')->middleware('is_admin');
//
//Route::get('/signin', [App\Http\Controllers\NavController::class, 'signIn'])->name('signIn');
//
//Route::get('/signup', [App\Http\Controllers\NavController::class, 'signUp'])->name('signUp');
//

//
//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
