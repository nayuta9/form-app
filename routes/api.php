<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get("/form-app", [TestController::class, 'api']);
Route::post("/form-app", [TestController::class, 'api']);

