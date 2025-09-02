<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listaproductos', function () {
    return view('listadeproductos');
});
