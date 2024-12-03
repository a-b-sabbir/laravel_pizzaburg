<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/pizzas/{id}', function ($id) {
   
    return view('details', ['id' => $id]);
});
