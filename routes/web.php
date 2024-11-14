<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\RegisterController;

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
    Route::view('/'.('become-owner'), 'become_owner')->name('become.owner');
    Route::post('/subscription/store', 'App\Http\Controllers\BusController@store_subscription')->name('subscription.store');
    Route::post('/consignment/store', 'App\Http\Controllers\BusController@store_consignment')->name('consignment.store');
    Route::post('/submit-form', 'App\Http\Controllers\BusController@submitForm')->name('form.submit');


    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route pour gérer la soumission du formulaire d'inscription
    Route::post('/register', [RegisterController::class, 'register'])->name('register.post');




//    Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
//    Route::post('/register', [RegisterController::class, 'register']);



//     Route::post('/submit-form', [FormController::class, 'submitForm'])->name('form.submit');
//
});

Route::middleware(['role:admin', 'auth'])->name('admin.')->group(function (){

    // Route pour les roles
    Route::get('role/list', [RoleController::class, 'list'])->name('role.list');
    Route::get('panel/role/add',[RoleController::class,'add'])->name('role.add');
    Route::post('panel/role/insert',[RoleController::class,'insert'])->name('role.insert');
    Route::get('panel/role/delete/{id}',[RoleController::class,'delete'])->name('role.delete');
    Route::get('panel/role/edit/{id}',[RoleController::class,'edit'])->name('role.edit');
    Route::post('panel/role/update/{id}',[RoleController::class,'update'])->name('role.update');

    // Route pour les utilisateurs
    // Route::get('panel/user',[UserController::class,'list'])->name('user.list');
    // Route::get('panel/user/add',[UserController::class,'add'])->name('user.add');
    // Route::post('panel/user/insert',[UserController::class,'insert'])->name('user.insert');
    // Route::get('panel/user/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    // Route::post('panel/user/update/{id}',[UserController::class,'update'])->name('user.update');
    // Route::get('panel/user/delete/{id}',[UserController::class,'delete'])->name('user.delete');

    Route::get('/reservations', [\App\Http\Controllers\AdminController::class, 'reservations'])->name('reservations');
    Route::get('/utilisateurs', [\App\Http\Controllers\AdminController::class, 'utilisateurs'])->name('utilisateurs');
    Route::get('/ecoles', [\App\Http\Controllers\AdminController::class, 'ecoles'])->name('ecoles');
    Route::get('/parametres', [\App\Http\Controllers\AdminController::class, 'parametres'])->name('parametres');
    Route::get('/Consignations', [\App\Http\Controllers\AdminController::class, 'Consignations'])->name('Consignations');

    Route::get('/ajouter_ecole', [\App\Http\Controllers\AdminController::class, 'ajouter_ecole'])->name('add.ecole');
    Route::get('/ajouter_utilisateur', [\App\Http\Controllers\AdminController::class, 'ajouter_utilisateur'])->name('add.utilisateur');

    Route::get('/modifier_ecole/{id}', [\App\Http\Controllers\AdminController::class, 'update_school'])->name('update.school');
    Route::get('/modifier_parametre/{id}', [\App\Http\Controllers\AdminController::class, 'update_parametre'])->name('update.parametre');
    Route::get('/modifier_utilisateur/{id}', [\App\Http\Controllers\AdminController::class, 'update_utilisateur'])->name('update.utilisateur');
    Route::get('/traiter_reservation/{id}', [\App\Http\Controllers\AdminController::class, 'traiter_reservation'])->name('update.reservation');

    Route::post('/supprimer_ecole{id}', [\App\Http\Controllers\AdminController::class, 'del_school'])->name('del.school');
    Route::post('/supprimer_utilisateur{id}', [\App\Http\Controllers\AdminController::class, 'del_user'])->name('del.user');

    Route::post('/do_update_school/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_school'])->name('do.update.school');
    Route::post('/do_update_parameter/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_parameter'])->name('do.update.parameter');
    Route::post('/do_update_user/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_user'])->name('do.update.user');
    Route::post('/do_update_reservation/{id}', [\App\Http\Controllers\AdminController::class, 'do_update_reservation'])->name('do.update.reservation');

    Route::post('/add_user', [\App\Http\Controllers\AdminController::class, 'add_user'])->name('add.user');
    Route::post('/add_school', [\App\Http\Controllers\AdminController::class, 'add_school'])->name('add.school');

    ////chauffeur////
    Route::get('/chauffeur', [\App\Http\Controllers\AdminController::class, 'chauffeur'])->name('chauffeur');
    Route::get('/chauffeur/create', [\App\Http\Controllers\AdminController::class, 'createChauffeur'])->name('create.chauffeur');
    Route::post('/chauffeur/store', [\App\Http\Controllers\AdminController::class, 'storeChauffeur'])->name('store.chauffeur');
    Route::get('/chauffeur/edit/{id}', [\App\Http\Controllers\AdminController::class, 'editChauffeur'])->name('edit.chauffeur');
    Route::put('/chauffeur/update/{id}', [\App\Http\Controllers\AdminController::class, 'updateChauffeur'])->name('update.chauffeur');
    Route::delete('/chauffeur/delete/{id}', [\App\Http\Controllers\AdminController::class, 'deleteChauffeur'])->name('delete.chauffeur');

    ////parent////
    Route::get('/parent', [\App\Http\Controllers\AdminController::class, 'parent'])->name('parent');

    Route::get('/admin.logout', function () {
        Auth::logout();
        return redirect(route('login_page'));
    })->name('logout');

    // Route::post('/dashboard2', [\App\Http\Controllers\AdminController::class, 'login'])->name('dashboard_admin');
});





//Route::name('admin.')->middleware('auth')->group(function (){
//
//
//});

// Route::get('/admin-login', [\App\Http\Controllers\AdminController::class, 'login_page'])->name('login_page');
Route::post('/dashboard2', [\App\Http\Controllers\AdminController::class, 'login_page'])->name('dashboard');
Route::get('/dashboard2', [\App\Http\Controllers\AdminController::class, 'login_page'])->name('dashboard');


Route::get('login', [AuthenticatedSessionController::class, 'create'])
->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store'])->name('login');


Route::get('register', [RegisteredUserController::class, 'create'])
->name('register');
Route::post('register', [RegisteredUserController::class, 'store'])->name('register');

Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
