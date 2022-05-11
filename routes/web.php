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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/datauser', [App\Http\Controllers\DataUserController::class, 'datauser'])->name('datauser');

Route::get('/tambahuser', [App\Http\Controllers\DataUserController::class, 'tambahuser'])->name('tambahuser');
Route::post('/insertuser', [App\Http\Controllers\DataUserController::class, 'insertuser'])->name('insertuser');

Route::get('/deleteuser/{id}', [App\Http\Controllers\DataUserController::class, 'deleteuser'])->name('deleteuser');
