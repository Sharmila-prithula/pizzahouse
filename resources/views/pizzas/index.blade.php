@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-index">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="content">
            <div class="title m-b-md">
                <h1> Pizza List</h1>
            </div>
            <div class="pizza-item">
                @foreach($pizzas as $pizza)
                <h4> <a href="/pizzas/{{ $pizza->id }}">{{ $pizza->name }}</a></h4>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection