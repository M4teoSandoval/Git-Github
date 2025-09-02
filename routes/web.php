<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listaproductos', function () {
    return view('listadeproductos');
});

Route::get('/detalle', function () {
    return view('detalle');
});


Route::get('/carrito', function () {
    return view('carritocompra');
});
