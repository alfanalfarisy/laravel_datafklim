<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FklimController;

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
Route::get('/', [FklimController::class, 'index'] );
Route::post('/', [FklimController::class, 'getFklim']);
Route::get('/fklim', [FklimController::class, 'getFklim']);
Route::post('/importExcel', [FklimController::class, 'importExcel'])->name('importExcel');
Route::get('/fklim{Tanggal}', [FklimController::class, 'trash']);
// Route::get('/fklim','FklimController@trash');
