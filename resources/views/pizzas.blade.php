@extends('layout.layout')
@section('content')
<center>
    <span>
        <h2>Name : {{ $name }}</h2>
        <h3>Age : {{ $age }}</h3>
        @for ($i = 0; $i < count($pizzas); $i++)
            <p>{{ $pizzas[$i]['type'] }}</p>
            @endfor

            @foreach ($pizzas as $pizza)
            <p>{{ $loop->index }} - {{ $pizza['type'] }} - {{ $pizza['base'] }}</p>
            @endforeach
    </span>
</center>
@endsection