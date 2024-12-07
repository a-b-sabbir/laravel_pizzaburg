@extends('layout.layout')
@section('content')
<h2>Create a new pizza</h2>
<form action="/pizzaburg/pizzas" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="photo">User Photo:</label>
        <input type="file" name="photo" id="photo" accept="image/*" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="name">Your Name: </label>
        <input class="form-control w-50" type="text" id="name" name="name" /><br>
    </div>
    <div class="mb-3">
        <label class="form-label" for="price">Price: </label>
        <input class="form-control w-50" type="text" id="price" name="price" /><br>
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
        <br>
        <fieldset>
            <label for="">Extra Toppings : </label><br>
            <input type="checkbox" name="toppings[]" value="Mushrooms">Mushrooms<br>
            <input type="checkbox" name="toppings[]" value="Garlic">Garlic<br>
            <input type="checkbox" name="toppings[]" value="Olives">Olives<br>
            <input type="checkbox" name="toppings[]" value="Peppers">Peppers<br>
        </fieldset>
    </div>
    <button class="btn btn-secondary" type="submit">Order Pizza</button>
</form>
@endsection