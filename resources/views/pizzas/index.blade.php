@extends('layout.layout')
@section('content')
<BR>

<Center>
    <p class="mssg">{{ session('mssg') }}</p>
    <h4>Pizzas</h4>
</Center>

@if ($pizzas->count() > 0)
<table class="table">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Type</th>
            <th>Base</th>
            <th>Price</th>
            <th>Toppings</th>
            <th>Photo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pizzas as $pizza)
        <tr>
            <td>{{ $pizza->id }}</td>
            <td>{{ $pizza->name }}</td>
            <td>{{ $pizza->type }}</td>
            <td>{{ $pizza->base }}</td>
            <td>{{ $pizza->price }}</td>
            <td>
                @if (!empty($pizza->toppings))
                @foreach ($pizza->toppings as $topping)
                <span>{{ $topping }}</span>@if (!$loop->last), @endif
                @endforeach
                @else
                <span>No toppings</span>
                @endif
            </td>
            <td>
                @if($pizza->photo)
                <img src="{{ asset('storage/' . $pizza->photo) }}" alt="Pizza Photo" width="100">
                @else
                No photo
                @endif
            </td>


        </tr>
        @endforeach
    </tbody>
</table>

@else
<p>No orders are found.</p>


@endif
<!-- Render pagination links -->
{{ $pizzas->links() }}
<a href='/pizzaburg/pizzas/create'>Order a Pizza</a>


@endsection