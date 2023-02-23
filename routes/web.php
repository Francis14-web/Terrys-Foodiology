<?php

use Illuminate\Support\Facades\Auth;
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
    return view('index');
});

Route::get('/admin/login', 'App\Http\Controllers\Auth\AdminAuthController@login')->name('admin.login')->middleware('guest:admin');
Route::post('/admin/authenticate', 'App\Http\Controllers\Auth\AdminAuthController@authenticate')->name('admin.authenticate')->middleware('guest:admin');

Route::get('/canteen/login', 'App\Http\Controllers\Auth\CanteenAuthController@login')->name('canteen.login')->middleware('guest:canteen');
Route::post('/canteen/authenticate', 'App\Http\Controllers\Auth\CanteenAuthController@authenticate')->name('canteen.authenticate')->middleware('guest:canteen');

Route::get('/user/login', 'App\Http\Controllers\Auth\UserAuthController@login')->name('user.login')->middleware('guest:user');
Route::post('/user/authenticate', 'App\Http\Controllers\Auth\UserAuthController@authenticate')->name('user.authenticate')->middleware('guest:user');

Route::get('/user/register', 'App\Http\Controllers\Auth\UserAuthController@register')->name('user.register')->middleware('guest:user');

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('admin.logout');
});

Route::middleware('canteen')->group(function () {
    Route::get('/canteen/dashboard', 'App\Http\Controllers\CanteenController@dashboard')->name('canteen.dashboard');
    Route::get('/canteen/menu', 'App\Http\Controllers\CanteenController@menu')->name('canteen.menu');
    Route::get('/canteen/logout', 'App\Http\Controllers\Auth\CanteenAuthController@logout')->name('canteen.logout');
});

Route::middleware('user')->group(function () {
    Route::get('/user/dashboard', 'App\Http\Controllers\UserController@dashboard')->name('user.dashboard');
    Route::get('/user/menu', 'App\Http\Controllers\UserController@menu')->name('user.menu');
    Route::get('/user/logout', 'App\Http\Controllers\Auth\UserAuthController@logout')->name('user.logout');
});



Route::get('/logout', function()
{
    Auth::logout();

    return redirect()->route('login');
})->name('logout');
