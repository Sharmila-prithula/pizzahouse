<?php

namespace App\Http\Controllers;

use App\Models\Pizza as ModelsPizza;
use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        #$pizzas=[['name'=>'Hawaiian', 'type'=>'cheesy', 'base'=>'thin crust'],['name'=>'Italian', 'type'=>'sausage', 'base'=>'soft crust']];
        $pizzas= Pizza::all();
        #$pizzas= Pizza::orderby('name','desc')->get();
        #$pizzas= Pizza::where('type','Italian')->get();
        #$pizzas= Pizza::latest()->get();
        return view('pizzas.index', ['pizzas'=>$pizzas]);
    }

    public function show($id){
        return view('pizzas.show', ['id'=>$id]);
    }

    public function create(){
        return view('pizzas.create');
    }
}
