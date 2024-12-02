<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('id', 'desc')->get();
        // $pizzas = Pizza::where('type','Hawaiian')->get();
        // $pizzas = Pizza::latest()->get();
        $id = request('id');

        // $name = request('name');
        // $age = request('age');
        return view('pizzas.index', ['pizzas' => $pizzas]);
    }
    public function show($id)
    {
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizzas' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();
        return redirect('/pizzas');
    }
}
