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
        $pizza=Pizza::findorFail($id);
        return view('pizzas.show', ['pizza'=>$pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings= request('toppings');
        $pizza->save();
        #return request('toppings');
        return redirect('/')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');        
    }
}
