@extends('layout.layout')
@section('content')
<h2>Order for {{ $pizzas->name }}</h2>
<br>
<h4>Type : {{ $pizzas->type }}</h4>
<h4>base : {{ $pizzas->base }}</h4>
<h4 class="toppings">Extra Toppings</h4>
<ul>
    @foreach ($pizzas->toppings as $topping)
    <li>{{ $topping }}</li>
    @endforeach
</ul>

<form action="/pizzaburg/pizzas/{{ $pizzas->id }}" method="POST">
    @csrf
    @method('DELETE')
    <button class="btn btn-danger">Complete Order</button>

</form>

<a href="/pizzaburg/pizzas" class="back">Back to all pizzas</a>

@endsection