<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SktmController;
use App\Http\Controllers\AspirasiController;
use App\Http\Controllers\DataUserController;
use App\Http\Controllers\SlipgajiController;
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
    Route::get('/editinformasi/{id}', [InformasiController::class, 'editinformasi'])->name('editinformasi', $id);
    Route::post('/updateinformasi/{id}', [InformasiController::class, 'updateinformasi'])->name('updateinformasi', $id);
    Route::get('/deleteinformasi/{id}', [InformasiController::class, 'deleteinformasi'])->name('deleteinformasi', $id);
    
    Route::get('/aspirasi', [AspirasiController::class, 'aspirasi'])->name('aspirasi');

    Route::get('/sktm', [SktmController::class, 'pengajuansktm'])->name('sktm');
    Route::get('/detailsktm/{id}', [SktmController::class, 'detailsktm'])->name('detailsktm', $id);
    Route::post('/uploadsktm/{id}', [SktmController::class, 'uploadsktm'])->name('uploadsktm', $id);
    Route::get('/accsktm/{id}', [SktmController::class, 'accsktm'])->name('accsktm', $id);

    Route::get('/slipgaji', [SlipgajiController::class, 'pengajuanslipgaji'])->name('slipgaji');
    Route::get('/detailslipgaji/{id}', [SlipgajiController::class, 'detailslipgaji'])->name('detailslipgaji', $id);
    Route::post('/uploadslipgaji/{id}', [SlipgajiController::class, 'uploadslipgaji'])->name('uploadslipgaji', $id);
    Route::get('/accslipgaji/{id}', [SlipgajiController::class, 'accslipgaji'])->name('accslipgaji', $id);
});

Route::group(['prefix'=>'masyarakat', 'middleware' => 'can:isUser'], function($id = null){
    Route::get('/informasi', [InformasiController::class, 'informasi'])->name('informasi_user');
    Route::get('/detailinformasi/{id}', [InformasiController::class, 'detailinformasi'])->name('detailinformasi', $id);
    
    Route::get('/kirimaspirasi', [AspirasiController::class, 'kirimaspirasi'])->name('kirimaspirasi');
    Route::post('/insertaspirasi', [AspirasiController::class, 'insertaspirasi'])->name('insertaspirasi');

    Route::get('/pengajuansktm', [SktmController::class, 'pengajuansktm'])->name('pengajuansktm');
    Route::get('/tambahsktm', [SktmController::class, 'tambahsktm'])->name('tambahsktm');
    Route::post('/insertsktm', [SktmController::class, 'insertsktm'])->name('insertsktm');
    Route::get('/downloadsktm/{id}', [SktmController::class, 'downloadsktm'])->name('downloadsktm', $id);

    Route::get('/pengajuanslipgaji', [SlipgajiController::class, 'pengajuanslipgaji'])->name('pengajuanslipgaji');
    Route::get('/tambahslipgaji', [SlipgajiController::class, 'tambahslipgaji'])->name('tambahslipgaji');
    Route::post('/insertslipgaji', [SlipgajiController::class, 'insertslipgaji'])->name('insertslipgaji');
    Route::get('/downloadslipgaji/{id}', [SlipgajiController::class, 'downloadslipgaji'])->name('downloadslipgaji', $id);
});
