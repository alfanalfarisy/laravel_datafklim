<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fklimController;
use App\Http\Controllers\historyController;
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
Route::get('/', [fklimController::class, 'index'] );
Route::get('/history', [historyController::class, 'index'] );
Route::post('/history', [historyController::class, 'getHistory']);
Route::get('/createfklim', function () {
    return view('createfklim');
});
Route::get('/createfklim','App\Http\Controllers\fklimController@tambah');
Route::post('/fklim/store','App\Http\Controllers\fklimController@store');