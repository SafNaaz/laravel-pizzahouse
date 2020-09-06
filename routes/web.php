<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', function () {
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
});

Route::get('/pizzas/{id}', function ($id) {
    // use the $id variable to query the db for a record
    return view('details', ['id' => $id]);
});
