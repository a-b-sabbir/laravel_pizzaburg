<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [PizzaController::class, 'index']);
Route::get('/pizzas/create', [PizzaController::class, 'create']);

Route::Post('/pizzas', [PizzaController::class, 'store'])->name('pizza.store');

Route::get('/pizzas/{id}', [PizzaController::class, 'show']);
Route::delete('/pizzas/{id}', [PizzaController::class, 'destroy']);


Route::get('pizza/search', [PizzaController::class, 'search'])->name('pizzas.search');


Route::get('/profile/create', [ProfileController::class, 'create'])->name('profile.create');

Route::Post('/profile', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profile', [ProfileController::class, 'index']);