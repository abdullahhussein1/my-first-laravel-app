<?php

use App\Http\Controllers\UserController;
use Illuminate\Request;
use Illuminate\Support\Facades\Route;

Route::resource('/users', UserController::class);