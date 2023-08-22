<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\MercadoController;

Route::get('/',[MercadoController::class, 'index']);
Route::post('/mercado', [MercadoController::class, 'store']);
