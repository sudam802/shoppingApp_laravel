<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    //pizza controller function
    public function index(){
        $pizzas = [
            "Margherita" => 8.99,
            "Pepperoni" => 10.99,
            "BBQ Chicken" => 12.50,
            "Vegetarian" => 9.99,
            "Hawaiian" => 11.25
        ];
        
        return view('pizzas',['pizzas'=>$pizzas]);
    }
    public function show($id){
        return view('details',['id'=>$id]);
    
    }
}
