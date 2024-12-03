<?php

use Illuminate\Support\Facades\Route;
use Dragon\Core\Config;

/*
 |--------------------------------------------------------------------------
 | API Routes
 |--------------------------------------------------------------------------
 |
 | Here is where you can register API routes for your application. These
 | routes are loaded by the RouteServiceProvider and all of them will
 | be assigned to the "api" middleware group. Make something great!
 |
 */

Route::middleware('api')->prefix(Config::prefix())->group(function () {
	// 
});
