<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    //pizza controller function
    public function index(){
        $pizzas=Pizza::all();
        
        return view('pizzas.index',['pizzas'=>$pizzas]);
    }
    public function show($id){
        $item=Pizza::findOrFail($id);
        return view('pizzas.show',['id'=>$item]);
    
    }

    public function create(){
        return view('pizzas.create');
    }
}
