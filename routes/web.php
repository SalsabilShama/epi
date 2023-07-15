<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\RegistrationController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TikaController;
use App\Http\Controllers\TikaStockController;
use App\Http\Controllers\Admin\UpozillaController;

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
    Route::post('/upozilla/stock/add/',[TikaStockController::class, 'upozillaStockAdd'])->name('upozillaStockAdd');
    Route::get('/ward/stock/',[TikaStockController::class, 'wardStockShow'])->name('wardStockShow');
    Route::post('/ward/stock/add/',[TikaStockController::class, 'wardStockAdd'])->name('wardStockAdd');
    Route::get('/ward/stock/view/',[TikaStockController::class, 'wardStockView'])->name('wardStockView');
    Route::get('/ward/tika/uses/view/',[TikaStockController::class, 'wardTikaUsesView'])->name('wardTikaUsesView');
    Route::post('/ward/tika/uses/add/',[TikaStockController::class, 'wardTikaUsesAdd'])->name('wardTikaUsesAdd');
    Route::get('/view/upozilla/uses/',[TikaStockController::class, 'viewUpozillaUses'])->name('viewUpozillaUses');
    Route::get('/upozilla/stock/view/',[TikaStockController::class, 'upozillaStockView'])->name('upozillaStockView');
    Route::get('/view/union/uses/',[TikaStockController::class, 'viewUnionUses'])->name('viewUnionUses');
    Route::get('/union/stock/view/',[TikaStockController::class, 'unionStockView'])->name('unionStockView');
    Route::get('/view/ward/uses/',[TikaStockController::class, 'viewWardUses'])->name('viewWardUses');

    Route::get('/view/upozilla/',[UpozillaController::class, 'upozillaShow'])->name('upozillaShow');
    Route::get('/add/upozilla/',[UpozillaController::class, 'upozillaAdd'])->name('upozillaAdd'); 
    Route::post('/add/upozilla/post/',[UpozillaController::class, 'upozillaAddPost'])->name('upozillaAddPost');

    Route::get('/view/union/',[UpozillaController::class, 'unionShow'])->name('unionShow');
    Route::get('/add/union/',[UpozillaController::class, 'unionAdd'])->name('unionAdd'); 
    Route::post('/add/union/post/',[UpozillaController::class, 'unionAddPost'])->name('unionAddPost');

    Route::get('/view/ward/',[UpozillaController::class, 'wardShow'])->name('wardShow');
    Route::get('/add/ward/',[UpozillaController::class, 'wardAdd'])->name('wardAdd'); 
    Route::post('/add/ward/post/',[UpozillaController::class, 'wardAddPost'])->name('wardAddPost');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
