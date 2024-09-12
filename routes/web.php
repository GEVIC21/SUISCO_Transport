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

Route::name('bus.')->group(function (){
    Route::get('/', 'App\Http\Controllers\BusController@index')->name('index');
    Route::view('/'.__('become-owner'), 'become_owner')->name('become.owner');
    Route::post('/subscription/store', 'App\Http\Controllers\BusController@store_subscription')->name('subscription.store');
    Route::post('/consignment/store', 'App\Http\Controllers\BusController@store_consignment')->name('consignment.store');
    Route::post('/submit-form', 'App\Http\Controllers\BusController@submitForm')->name('form.submit');

    // Route::post('/submit-form', [FormController::class, 'submitForm'])->name('form.submit');

});


Route::name('admin.')->middleware('auth')->group(function (){
    Route::get('/reservations', [\App\Http\Controllers\AdminController::class, 'reservations'])->name('reservations');
    Route::get('/utilisateurs', [\App\Http\Controllers\AdminController::class, 'utilisateurs'])->name('utilisateurs');
    Route::get('/ecoles', [\App\Http\Controllers\AdminController::class, 'ecoles'])->name('ecoles');
    Route::get('/parametres', [\App\Http\Controllers\AdminController::class, 'parametres'])->name('parametres');

    Route::get('/ajouter_ecole', [\App\Http\Controllers\AdminController::class, 'ajouter_ecole'])->name('add.ecole');
    Route::get('/ajouter_utilisateur', [\App\Http\Controllers\AdminController::class, 'ajouter_utilisateur'])->name('add.utilisateur');

    Route::get('/modifier_ecole/{id}', [\App\Http\Controllers\AdminController::class, 'update_school'])->name('update.school');
    Route::get('/modifier_parametre/{id}', [\App\Http\Controllers\AdminController::class, 'update_parametre'])->name('update.parametre');
    Route::get('/modifier_utilisateur/{id}', [\App\Http\Controllers\AdminController::class, 'update_utilisateur'])->name('update.utilisateur');

    Route::post('/supprimer_ecole{id}', [\App\Http\Controllers\AdminController::class, 'del_school'])->name('del.school');
    Route::post('/supprimer_utilisateur{id}', [\App\Http\Controllers\AdminController::class, 'del_user'])->name('del.user');

    Route::post('/do_update_school/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_school'])->name('do.update.school');
    Route::post('/do_update_parameter/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_parameter'])->name('do.update.parameter');
    Route::post('/do_update_user/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_user'])->name('do.update.user');

    Route::post('/add_user', [\App\Http\Controllers\AdminController::class, 'add_user'])->name('add.user');
    Route::post('/add_school', [\App\Http\Controllers\AdminController::class, 'add_school'])->name('add.school');

    Route::get('/admin.logout', function () {
        Auth::logout();
        return redirect(route('login_page'));
    })->name('logout');

});

Route::get('/admin-login', [\App\Http\Controllers\AdminController::class, 'login_page'])->name('login_page');
Route::post('/admin-logged', [\App\Http\Controllers\AdminController::class, 'login'])->name('login');

