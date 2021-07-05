@extends('layouts.layout')

@section('content')
<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
    @if (Route::has('login'))
    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
        @auth
        <a href="{{ url('/home') }}" class="text-sm text-gray-500 underline">Home</a>
        @else
        <a href="{{ route('login') }}" class="text-sm text-gray-500 underline">Login</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-500 underline">Register</a>
        @endif
        @endif
        <a href="{{ url('/terms') }}" class="text-sm text-gray-500 underline ml-4">Terms</a>
    </div>
    @endif

    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <h2 text-align="center">Pizza House</h2>
            <img src="/img/pizzahouseIcon.png" alt="pizza icon" width="500px" height="400px" margin-left="auto"><br>
        <p class="mssg">{{ session('mssg') }}</p>
        <a href="{{ route('pizzas.create') }}">Order a pizza</a>
    </div>
</div>
@endsection