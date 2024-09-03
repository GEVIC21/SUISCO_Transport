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

Route::name('bus.')->group(function (){
    Route::get('/', 'App\Http\Controllers\BusController@index')->name('index');
    Route::view('/'.__('become-owner'), 'become_owner')->name('become.owner');

    Route::post('/subscription/store', 'App\Http\Controllers\BusController@store_subscription')->name('subscription.store');
    Route::post('/consignment/store', 'App\Http\Controllers\BusController@store_consignment')->name('consignment.store');
});

Route::name('admin.')->group(function (){
    Route::get('/app', [\App\Http\Controllers\AdminController::class, 'app'])->name('app');
});

Route::get('/admin-login', [\App\Http\Controllers\AdminController::class, 'login_page'])->name('login_page');

