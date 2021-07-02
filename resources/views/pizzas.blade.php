@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
        <div class="content">
            <div class="title m-b-md">
                Pizza List
            </div>
            <div>
                @foreach($pizzas as $pizza)
                {{ $pizza->name }}-{{ $pizza->type }}- {{ $pizza->base }}</p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection