<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\ProductController;
Route::apiResource('product',ProductController::class);

use App\Http\Controllers\ReviewController;
// Route::prefix('product',function(){
    
// });
Route::prefix('product')->group(function () {
    Route::apiResource('/{productId}/review',ReviewController::class);
});


