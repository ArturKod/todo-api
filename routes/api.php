<?php

use App\Http\Controllers\TaskIndexController;
use App\Http\Controllers\TaskStoreController;
use App\Http\Controllers\TaskShowController;
use App\Http\Controllers\TaskUpdateController;
use App\Http\Controllers\TaskDestroyController;
use Illuminate\Support\Facades\Route;

Route::get('/tasks', TaskIndexController::class);
Route::post('/tasks', TaskStoreController::class);
Route::get('/tasks/{id}', TaskShowController::class);
Route::put('/tasks/{id}', TaskUpdateController::class);
Route::delete('/tasks/{id}', TaskDestroyController::class);