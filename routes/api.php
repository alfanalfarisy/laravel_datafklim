<?php

use Illuminate\Http\Request;
use App\Models\fklim;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fklimController;

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
Route::get('/fklim', [fklimController::class, 'index']);

Route::post('/fklim', function (){
      return fklim::create(request()->all());
});

Route::get('/fklim/{tanggal}', [fklimController::class, 'dataByDate']);
Route::get('/fklim/range/{startDate}/{endDate}', [fklimController::class, 'dataByRangeDate']);
Route::get('/fklim/{tanggal}', [fklimController::class, 'dataByDate']);
Route::get('/createfklim','App\Http\Controllers\fklimController@tambah');
Route::post('/fklim/store','App\Http\Controllers\fklimController@store');
