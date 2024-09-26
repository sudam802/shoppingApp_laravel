@extends('layouts.layout')
@section('content')

<div class="text-7xl font-extrabold italic text-center text-transparent bg-clip-text bg-gradient-to-r from-green-500 to-red-500 mb-8">
    <div> 
        <ul>
            @foreach($pizzas as $pizza)
                <li>{{$pizza->name}}-{{$pizza->type}}</li>
            @endforeach
        </ul>
    </div>
</div>


@endsection