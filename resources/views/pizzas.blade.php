@extends('layout.layout')
@section('content')
<center>
    <h1>User Name : {{ $transfer_name }}</h1>
    <h2>Age : {{ $transfer_age }}</h2>
    <h2>Pizza List</h2>
    @for ($i = 0; $i < count($pizzas); $i++)
        <p>{{ $pizzas [$i] ['type'] }}</p>
        @endfor

        @foreach ($pizzas as $pizza)
        <div>
            {{ $loop -> index +1 }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}
        </div>
        @endforeach
</center>
@endsection