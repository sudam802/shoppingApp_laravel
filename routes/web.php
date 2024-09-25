<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/pizzas',function(){
    $pizzas = [
        "Margherita" => 8.99,
        "Pepperoni" => 10.99,
        "BBQ Chicken" => 12.50,
        "Vegetarian" => 9.99,
        "Hawaiian" => 11.25
    ];
    
    // To print the array
    
    return view('pizzas',['pizzas'=>$pizzas]);
});

Route::get('pizzas/{id}',function($id){
    return view('details',['id'=>$id]);

});