@extends('layout.layout')
@section('content')
<h2>Create a new pizza</h2>
<form action="/pizzaburg/pizzas" method="POST">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="name">Your Name: </label>
        <input class="form-control w-50" type="text" id="name" name="name" /><br>
    </div>
    <div class="mb-3">
        <label for="type">Choose a Pizza type: </label>
        <select class="form-select w-50" name="type" id="type">
            <option value="Margarita">Margarita</option>
            <option value="Hawaiian">Hawaiian</option>
            <option value="Veg Supreme">Veg Supreme</option>
            <option value="Volcano">Volcano</option>
        </select>
    </div>
    <br>
    <div class="mb-3">
        <label for="base">Choose a Pizza base: </label>
        <select class="form-select w-50" name="base" id="base">
            <option value="Cheesy Crust">Cheesy Crust</option>
            <option value="Garlic Crust">Garlic Crust</option>
            <option value="Thin & Crispy">Thin & Crispy</option>
            <option value="Thick">Thick</option>
        </select>
    </div>
    <button class="btn btn-secondary" type="submit">Order Pizza</button>
</form>
@endsection