<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        $pizzas=[
            ['name'=>'Hawaiian', 'type'=>'cheesy', 'base'=>'thin crust'],
            ['name'=>'Italian', 'type'=>'sausage', 'base'=>'soft crust']
        ];
        return view('pizzas', ['pizzas'=>$pizzas]);
    }

    public function show($id){
        return view('details', ['id'=>$id]);
    }
}
