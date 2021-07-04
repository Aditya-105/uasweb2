<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\HomeController;


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

Route::get('/home', [HomeController::class, 'index']);
Route::get('/paket', [PaketController::class, 'index']);
Route::post('/paket/add', [PaketController::class, 'store']);
Route::put('/paket/edit/{id}', [PaketController::class, 'update']);
Route::delete('/paket/delete/{id}', [PaketController::class, 'delete']);

Route::get('/profil', [ProfilController::class, 'index']);
Route::put('/profil/edit/{id}', [ProfilController::class, 'update']);

Route::get('/portofolio', [PortofolioController::class, 'index']);
Route::post('/portofolio/add', [PortofolioController::class, 'store']);
Route::put('/portofolio/edit/{id}', [PortofolioController::class, 'update']);
Route::delete('/portofolio/delete/{id}', [PortofolioController::class, 'delete']);
// Route::group(['middleware' => 'auth'], function () {
// });



// Route::get('/paket/create', [PaketController::class, 'create'])->name('paket.create');
