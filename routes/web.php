<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AspirasiController;
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

    Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'can:isAdmin'], function($id = null){
    Route::get('/datauser', [DataUserController::class, 'datauser'])->name('datauser');

    Route::get('/tambahuser', [DataUserController::class, 'tambahuser'])->name('tambahuser');
    Route::post('/insertuser', [DataUserController::class, 'insertuser'])->name('insertuser');
    
    Route::get('/deleteuser/{id}', [DataUserController::class, 'deleteuser'])->name('deleteuser');
    
    Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi');
    Route::get('/tambahinformasi', [InformasiController::class, 'tambahinformasi'])->name('tambahinformasi');
    Route::post('/insertinformasi', [InformasiController::class, 'insertinformasi'])->name('insertinformasi');
    // Route::get('/tampilinformasi/{id}', [InformasiController::class, 'tampilinformasi'])->name('insertinformasi');
    Route::get('/deleteinformasi/{id}', [InformasiController::class, 'deleteinformasi'])->name('deleteinformasi');
    
    Route::get('/aspirasi', [AspirasiController::class, 'aspirasi'])->name('aspirasi');
});

Route::group(['prefix'=>'masyarakat', 'middleware' => 'can:isUser'], function($id = null){
    Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi_user');
    
    Route::post('/insertaspirasi', [AspirasiController::class, 'insertaspirasi'])->name('insertaspirasi');
});
