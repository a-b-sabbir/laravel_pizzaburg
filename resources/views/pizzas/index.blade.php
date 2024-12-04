@extends('layout.layout')
@section('content')
<BR>

<Center>
    <p class="mssg">{{ session('mssg') }}</p>
    <h4>Pizzas</h4>

</Center>

<table class="table">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Type</th>
            <th>Base</th>
            <th>Price</th>
            <th>Toppings</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pizzas as $pizza)
        <tr>
            <td>{{ $pizza['id'] }} </td>
            <td>{{ $pizza['name'] }}</td>
            <td>{{ $pizza['type'] }}</td>
            <td>{{ $pizza['base'] }}</td>
            <td>{{ $pizza['price'] }}</td>
            <td>
                @foreach ($pizza->toppings as $topping)
                <span>{{ $topping }}</span>
                @if (!$loop->last), @endif
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="/pizzaburg/pizzas/create">Order a Pizza</a>

@endsection