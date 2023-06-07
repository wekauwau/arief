<?php

use App\Http\Controllers\Api\DataAnakController;
use App\Http\Controllers\Api\DataIbuController;
use App\Http\Controllers\Api\ImunisasiController;
use App\Http\Controllers\Api\JadwalController;
use App\Http\Controllers\Api\VaksinController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(DataIbuController::class)->group(function () {
    Route::post('/login', 'login');
    Route::post('/register', 'register');
});

Route::controller(JadwalController::class)->group(function () {
    Route::get('/jadwal', 'index');
});

Route::controller(DataAnakController::class)->group(function () {
    Route::get('/anak', 'show');
    Route::post('/anak', 'store');
});

Route::controller(VaksinController::class)->group(function () {
    Route::get('/vaksin', 'index');
    Route::get('/vaksin/{id}', 'show');
    Route::post('/vaksin', 'store');
});

Route::controller(ImunisasiController::class)->group(function () {
    Route::get('/imunisasi', 'index');
    Route::post('/imunisasi', 'store');
});
