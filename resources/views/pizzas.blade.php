@extends('layout.layout')
@section('content')
<BR>
<h5>Customer Name : {{ $name }}</h5>
<h5>Customer Age : {{ $age }}</h5>
<br>
<Center>
    <h4>Pizzas</h4>
</Center>
<table class="table">
    <thead>
        <tr>
            <th>SL</th>
            <th>Type</th>
            <th>Base</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pizzas as $pizza)
        <tr>
            <td>{{ $loop->index + 1 }} </td>
            <td>{{ $pizza['type'] }}</td>
            <td>{{ $pizza['base'] }}</td>
        </tr> @endforeach
    </tbody>
</table>

@endsection