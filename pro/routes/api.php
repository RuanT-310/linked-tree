<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource("user", UserController::class);

Route::apiResource('/register', AuthController::class);

Route::middleware('auth.basic')->post('/tokens/create', function (Request $request) {
    try {
        $user = $request->user();
        $token = $user->createToken($request->token_name);        
        return ['token' => $token->plainTextToken];
    } catch (Throwable $e) {
        $message = $e->getMessage();
        return response()->json(['error' => 'An unexpected error occurred. ' . $message], 400);
    }
});

Route::middleware('auth:sanctum')->get('/verify', function (Request $request) {
    try {
        $user = $request->user();
        return $user;
    } catch (Throwable $e) {
        $message = $e->getMessage();
        return response()->json(['error' => 'An unexpected error occurred. ' . $message], 400);
    }
});