@extends('layouts.layout')
@section('content')

<div> <h1>Customer-{{$id->customer}}</h1>
        <h1>Type-{{$id->type}}</h1>
</div>
<a href="pizzas">
    <button class="btn btn-primary">Back to Pizzas</button>
</a><a href="pizzas">

@endsection