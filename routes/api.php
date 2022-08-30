<?php

use App\Http\Controllers\loginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'prefix'     => 'auth'
], function ($router) {
    Route::get('validateUser', [loginController::class, 'validateUser']);
});
