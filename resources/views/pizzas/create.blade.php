@extends('layouts.layout')

@section('content')
<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizzas" method="POST">
        @csrf
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">
        <label for="type">Choose pizza type</label>
        <select name="type" id="type">
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg supreme</option>
            <option value="volcano">Volcano</option>
        </select>
        <label for="base">Choose base type</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy crust</option>
            <option value="garlic crust">Garlic crust</option>
            <option value="thin crust">Thin crust</option>
        </select>
        <fieldset>
            <label>Extra toppings</label>
            <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="sausage">Sausage<br>
            <input type="checkbox" name="toppings[]" value="pepperoni">Pepperoni<br>
            <input type="checkbox" name="toppings[]" value="cheese">Cheese<br>
        </fieldset>
        <input type="submit" value="Order Pizza">
    </form>
</div>
@endsection