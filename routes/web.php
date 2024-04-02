<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get("/test/func", [TestController::class, 'func']);
Route::post("/test/func", [TestController::class, 'func']);

