<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fklimController;
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
Route::get('/history', function () {
    return view('history');
});

// Route::get('/createfklim', function () {
//     return view('createfklim');
// });

Route::get('/', [fklimController::class, 'index'] );
Route::get('/createfklim','App\Http\Controllers\fklimController@tambah');
Route::post('/fklim/store','App\Http\Controllers\fklimController@store');