<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas', function () {
    $pizzas = [
        ['type' => 'Hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'Volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];

    $user_name = request('name');
    $user_age = request('age');

    return view('pizzas', ['pizzas' => $pizzas, 'transfer_name' => $user_name, 'transfer_age' => $user_age]);
});
