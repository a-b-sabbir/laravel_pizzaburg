@extends('layout.layout')
@section('content')
<h2>Order for {{ $pizzas->name }}</h2>
<br>
<h4>Type : {{ $pizzas->type }}</h4>
<h4>base : {{ $pizzas->base }}</h4>

@endsection