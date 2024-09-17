<?php

use App\Http\Controllers\Teskabeh;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/',[AboutController::class , 'about']);
Route::get('/my-app',[Teskabeh::class , 'index']);
