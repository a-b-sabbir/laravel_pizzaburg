<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas', function () {
    $pizzas = [
        "name" => "Hawaaiian",
        "base" => "Crispy",
        "price" => 20
    ];
    return view('pizzas', $pizzas);
});
