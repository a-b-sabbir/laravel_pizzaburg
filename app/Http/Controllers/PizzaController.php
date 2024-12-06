<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::all();
        $pizzas = Pizza::orderBy('id', 'desc')->paginate(5);
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
        $pizza->price = request('price');
        $pizza->toppings = request('toppings');

        $pizza->save();
        return redirect('/pizzas')->with('mssg', 'Thanks for your order');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->DELETE();

        return redirect('/pizzas');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search'); // Get the search term from the request

        // Paginate the filtered results (5 items per page)
        $pizzas = Pizza::where('name', 'like', '%' . $searchTerm . '%')
            ->orWhere('type', 'like', '%' . $searchTerm . '%')
            ->paginate(5);

        // Return the view with the paginated results
        return view('pizzas.index', ['pizzas' => $pizzas]);    }
}
