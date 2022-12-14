<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ems\LugaresController;
use App\Http\Controllers\ems\RegionController;
use App\Http\Controllers\ems\LugarInfoController;

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


Route::get("/", [RegionController::class, 'index']);

Route::get('regiones/{slug}', [LugaresController::class, 'index']);

Route::get('regiones/{slug}/{slug1}/info', [LugarInfoController::class, 'index']);