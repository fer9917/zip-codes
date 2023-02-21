<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ZipsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

 
Route::get('/zip-codes/{code}', [ZipsController::class, 'getZips'])->where('code', '[0-9]+');;