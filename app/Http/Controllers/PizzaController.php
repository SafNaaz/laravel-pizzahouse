<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
        // get data from db
        $pizza = [
            'type' => 'hawaiian',
            'base' => 'cheesy crust',
            'price' => 10
        ];

        $name = request('name');
        return view('pizzas', [
            'pizza' => $pizza,
            'name' => $name
        ]);
    }

    public function show($id){
        // use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
