<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\KendaraanController;

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

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    //$token = csrf_token();
 
    return $token;
});

Route::get('/Kendaraan/show/{id}', [KendaraanController::class, 'show']);
Route::get('/Kendaraan/getStok/{id}', 'App\Http\Controllers\KendaraanController@getStok');
Route::get('/Kendaraan/soldReport', 'App\Http\Controllers\KendaraanController@soldReport');
Route::put('/Kendaraan/soldItem/{id}', 'App\Http\Controllers\KendaraanController@soldItem');
