@extends('layouts.layout')
@section('content')

<div class="text-7xl font-extrabold italic text-center text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-red-500 mb-8">
    Order Your Favorite Meals
    <img src="img/FrontBanner.jpg" class="max-w-full h-auto"/>
    <div> 
        <ul>
            @foreach($pizzas as $type => $price)
                <li>{{ $type }}: ${{ $price }}</li>
            @endforeach
        </ul>
    </div>
</div>


@endsection