<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function show()
    {
        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('id','desc')->get();
        // $pizzas = Pizza::where('type','Hawaiian')->get();
        // $pizzas = Pizza::latest()->get();

        // $name = request('name');
        // $age = request('age');
        return view('pizzas', ['pizzas' => $pizzas]);
    }
    public function showByID($id)
    {
        return view('details', ['id' => $id]);
    }
}
