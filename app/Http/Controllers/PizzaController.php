<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index(){
        
        $pizzas = Pizza::all();
        
        return view('pizzas', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id){
        // use the $id variable to query the db for a record
        return view('details', ['id' => $id]);
    }
}
