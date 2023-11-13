<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/',[\App\Http\Controllers\API\api::class, 'home']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
