<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Route::post('/user/create-account', 'App\Http\Controllers\Auth\UserAuthController@createAccount')->name('user.createAccount')->middleware('guest:user');

Route::get('/user/forgot-password', 'App\Http\Controllers\Auth\UserAuthController@forgotPassword')->name('user.forgotPassword')->middleware('guest:user');

Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@dashboard')->name('admin.dashboard');
    Route::get('/admin/user', 'App\Http\Controllers\AdminController@user')->name('admin.user');
    Route::get('/admin/logout', 'App\Http\Controllers\Auth\AdminAuthController@logout')->name('admin.logout');
});

Route::middleware('canteen')->group(function () {
    Route::get('/canteen/dashboard', 'App\Http\Controllers\CanteenController@dashboard')->name('canteen.dashboard');
    Route::get('/canteen/menu', 'App\Http\Controllers\CanteenController@menu')->name('canteen.menu');
    Route::get('/canteen/sales', 'App\Http\Controllers\CanteenController@sales')->name('canteen.sales');
    Route::get('/canteen/sales/{date}', 'App\Http\Controllers\CanteenController@salesOverview')->name('canteen.sales.view');
    Route::get('/canteen/point-of-sale', 'App\Http\Controllers\CanteenController@pos')->name('canteen.pos');
    Route::get('/canteen/order', 'App\Http\Controllers\CanteenController@order')->name('canteen.order');
    Route::get('/canteen/logout', 'App\Http\Controllers\Auth\CanteenAuthController@logout')->name('canteen.logout');
});

Route::middleware(['user', 'is_restricted', 'is_expired'])->group(function () {
    Route::get('/user/dashboard', 'App\Http\Controllers\UserController@dashboard')->name('user.dashboard');
    Route::get('/user/menu', 'App\Http\Controllers\UserController@menu')->name('user.menu');
    Route::get('/user/menu/{food}', 'App\Http\Controllers\UserController@viewMenu')->name('user.menu.view');
    Route::get('/user/order', 'App\Http\Controllers\UserController@order')->name('user.order');
    Route::get('/user/order/{orders}', 'App\Http\Controllers\UserController@viewOrder')->name('user.order.view');
    Route::get('user/settings', 'App\Http\Controllers\UserController@settings')->name('user.settings');
    Route::get('/user/payment-success/{id}', 'App\Http\Controllers\UserController@paymentSuccess')->name('user.payment.success');
    Route::get('/user/logout', 'App\Http\Controllers\Auth\UserAuthController@logout')->name('user.logout');
    Route::get('/user/message', 'App\Http\Controllers\UserController@message')->name('user.message');
});

Route::get('/logout', function(){
    Auth::logout();
    return redirect()->route('login');
})->name('logout');


Route::get('/test-payment', 'App\Http\Controllers\UserController@test')->name('user.test');
Route::get('/failed', 'App\Http\Controllers\UserController@paymentFailed')->name('user.payment.failed');