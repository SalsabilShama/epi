<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\RegistrationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TikaController;
use App\Http\Controllers\TikaStockController;

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
    return view('user.home');
});
Route::get('/registration', [RegistrationController::class, 'index']);
Route::post('/registration', [RegistrationController::class, 'registration'])->name("registrationPost");



# Admin
Route::group(['middleware' => 'auth'], function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('roles','Admin\RolesController');
    Route::get('/admin-show',[AdminController::class, 'showAdminView'])->name('admin.index');
    Route::get('/admin-create',[AdminController::class, 'createAdminView'])->name('admin.create');
    Route::post('/admin-store',[AdminController::class, 'storeAdmin'])->name('admin.store');
    Route::get('/admin-create',[AdminController::class, 'createAdminView'])->name('admin.create');
    Route::get('/admin-edit/{id}/',[AdminController::class, 'adminEdit'])->name('admin.edit');
    Route::post('/admin-update',[AdminController::class, 'adminUpdate'])->name('admin.update');
    Route::post('/admin-delete',[AdminController::class, 'storeAdmin'])->name('admin.delete');
    Route::resource('tika','TikaController');
    Route::get('/give-tika/',[TikaController::class, 'tikaGive'])->name('tika_given');
    Route::post('/give-tika/post/',[TikaController::class, 'tikaGivePost'])->name('tika_given_post');
  
    Route::get('/union/stock/',[TikaStockController::class, 'unionStockShow'])->name('unionStockShow');
    Route::post('/union/stock/add/',[TikaStockController::class, 'unionStockAdd'])->name('unionStockAdd');
    Route::get('/upozilla/stock/',[TikaStockController::class, 'upozillaStockShow'])->name('upozillaStockShow');
    Route::post('/ward/stock/add/',[TikaStockController::class, 'upozillaStockAdd'])->name('upozillaStockAdd');
      Route::get('/ward/stock/',[TikaStockController::class, 'wardStockShow'])->name('wardStockShow');
    Route::post('/ward/stock/add/',[TikaStockController::class, 'wardStockAdd'])->name('wardStockAdd');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
