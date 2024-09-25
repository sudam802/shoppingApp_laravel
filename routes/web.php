<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/pizzas','PizzaContorller@index');

Route::get('pizzas/{id}','PizzaController@show');
Route::get('cofee',function(){

});

Route::get('beer',function(){

});