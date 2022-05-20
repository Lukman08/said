<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\InformasiController;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/datauser', [App\Http\Controllers\DataUserController::class, 'datauser'])->name('datauser');

Route::get('/tambahuser', [App\Http\Controllers\DataUserController::class, 'tambahuser'])->name('tambahuser');
Route::post('/insertuser', [App\Http\Controllers\DataUserController::class, 'insertuser'])->name('insertuser');

Route::get('/deleteuser/{id}', [App\Http\Controllers\DataUserController::class, 'deleteuser'])->name('deleteuser');

Route::get('/informasi', [App\Http\Controllers\InformasiController::class, 'informasi'])->name('informasi');
Route::get('/tambahinformasi', [App\Http\Controllers\InformasiController::class, 'tambahinformasi'])->name('tambahinformasi');
Route::post('/insertinformasi', [App\Http\Controllers\InformasiController::class, 'insertinformasi'])->name('insertinformasi');
Route::get('/tampilinformasi/{id}', [App\Http\Controllers\InformasiController::class, 'tampilinformasi'])->name('insertinformasi');
Route::get('/deleteinformasi/{id}', [App\Http\Controllers\InformasiController::class, 'deleteinformasi'])->name('deleteinformasi');
