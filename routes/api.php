<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get("/bbs", [TestController::class, 'api']);
Route::post("/bbs", [TestController::class, 'api']);

