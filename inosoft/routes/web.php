<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\MotorController;

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
Route::get('/Kendaraan/getStok/{id}', [KendaraanController::class, 'getStok']);
Route::get('/Kendaraan/soldReport', [KendaraanController::class, 'soldReport']);
Route::put('/Kendaraan/soldItem/{id}', [KendaraanController::class, 'soldItem']);

Route::post('/Motor/newMotor', [MotorController::class, 'newMotor']);
Route::post('/Mobil/newMobil', [MobilController::class, 'newMobil']);
