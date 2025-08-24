<?php

use App\Http\Controllers\Api\BukuController;
use App\Http\Middleware\CekHost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('buku', [BukuController::class, 'index'])->middleware(CekHost::class);
Route::get('buku/{id}', [BukuController::class, 'show'])->middleware(CekHost::class);
Route::post('buku', [BukuController::class, 'store'])->middleware(CekHost::class);
Route::put('buku/{id}', [BukuController::class, 'update'])->middleware(CekHost::class);
Route::delete('buku/{id}', [BukuController::class, 'destroy'])->middleware(CekHost::class);

// Route::apiResource('buku', [BukuController::class]);