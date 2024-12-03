@extends('layout.layout')
@section('content')
<BR>

<Center>
    <h4>Pizzas</h4>
</Center>
<table class="table">
    <thead>
        <tr>
            <th>SL</th>
            <th>Name</th>
            <th>Type</th>
            <th>Base</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($pizzas as $pizza)
        <tr>
            <td>{{ $pizza['id'] }} </td>
            
            <td>{{ $pizza['name'] }}</td>
            <td>{{ $pizza['type'] }}</td>
            <td>{{ $pizza['base'] }}</td>
        </tr> @endforeach
    </tbody>
</table>

@endsection