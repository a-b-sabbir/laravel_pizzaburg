@extends('layout.layout')
@section('content')
<h2>Order for {{ $pizzas->name }}</h2>
<br>
<h5>Type: {{ $pizzas->type }}</h5>
<h5>Base: {{ $pizzas->base }}</h5>


@endif<h5 class="toppings">Extra Toppings</h5>
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