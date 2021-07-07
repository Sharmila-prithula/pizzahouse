@extends('layouts.app')

@section('content')
<div class="m-auto w-4/8 py-24">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">
            Create a new pizza
        </h1>
    </div>
    <div class="flex justify-center pt-20">
        <form action="/pizzas" method="POST">
            @csrf
            <div class="block">
                <label for="name" >Your Name</label>
                <input type="text" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" id="name" name="name"><br>
                <label for="type">Choose pizza type</label>
                <select name="type" id="type" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                    <option value="hawaiian">Hawaiian</option>
                    <option value="veg supreme">Veg supreme</option>
                    <option value="volcano">Volcano</option>
                </select><br>
                <label for="base">Choose base type</label>
                <select name="base" id="base" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                    <option value="cheesy crust">Cheesy crust</option>
                    <option value="garlic crust">Garlic crust</option>
                    <option value="thin crust">Thin crust</option>
                </select><br>
                <fieldset class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400">
                    <label>Extra toppings</label><br>
                    <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
                    <input type="checkbox" name="toppings[]" value="sausage">Sausage<br>
                    <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br>
                    <input type="checkbox" name="toppings[]" value="cheese">Cheese<br>
                </fieldset>
                <input class="bg-green-500 bloack shadow-5xl mb-10 p-2 w-80 uppercase font-bold" type="submit" value="Order Pizza">
            </div>
        </form>
    </div>
</div>

@endsection