<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})-> name("welcome");

Route::get('/detalle', function () {
    return view('detalle');
})->  name("detalle");


Route::get('/carrito', function () {
    return view('carritocompra');
})->  name("detalle");
