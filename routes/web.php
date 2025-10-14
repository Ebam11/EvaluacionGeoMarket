<?php

use App\Http\Controllers\OrmController;
use Illuminate\Support\Facades\Route;


Route::get('/orm', [OrmController::class, 'index']);
