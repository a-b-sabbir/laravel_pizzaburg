<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function show()
    {
        $pizzas = [
            ['type' => 'Dominno', 'base' => 'Crispy'],
            ['type' => 'Hawaiian', 'base' => 'Garlic'],
        ];
        $name = request('name');
        $age = request('age');
        return view('pizzas', ['pizzas' => $pizzas, 'name' => $name, 'age' => $age]);
    }
    public function showByID($id)
    {
        return view('details', ['id' => $id]);
    }
}
