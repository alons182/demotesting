<?php

use Illuminate\Support\Facades\Route;



// $cal = new Calculadora();
// $resultado = $cal->sumar();








Route::get('/', function () {
    return view('welcome');
});
