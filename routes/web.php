<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

// Corrected routes with the array syntax
Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/create',[PizzaController::class,'create']);
Route::get('/pizzas/{id}', [PizzaController::class, 'show']);

