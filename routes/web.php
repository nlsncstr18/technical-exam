<?php

use Illuminate\Support\Facades\Route;
use illuminate\Http\Request;
use App\Http\Controllers\CocktailController;

Route::get('/', [CocktailController::class, 'index']);
Route::get('/{id}', [CocktailController::class, 'show']);