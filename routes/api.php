<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function (){
    Route::get('/informasi', [ApiController::class, 'index']);
    Route::post('/pengajuan/sktm', [ApiController::class, 'pengajuan_sktm']);
    Route::post('/pengajuan/slip', [ApiController::class, 'pengajuan_slip']);
    Route::post('/aspirasi', [ApiController::class, 'aspirasi']);
});
