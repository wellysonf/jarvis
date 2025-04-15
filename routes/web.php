<?php

use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AlunoController::class,'index']);
Route::post('/', [AlunoController::class,'store']);
