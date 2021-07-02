<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
    $pizzas=[
        ['name'=>'Hawaiian', 'type'=>'cheesy', 'base'=>'thin crust'],
        ['name'=>'Italian', 'type'=>'sausage', 'base'=>'soft crust']
    ];
    return view('pizzas', ['pizzas'=>$pizzas]);
});

Route::get('/pizzas/{id}', function ($id) {
    return view('details', ['id'=>$id]);
});
