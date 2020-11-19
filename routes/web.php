<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserInfoController;
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

//Route::view('/', 'welcome');

Route::get('/user', [UserInfoController::class, "index"])->name('user.index');
Route::resource('/product', ProductController::class)->except('show');
