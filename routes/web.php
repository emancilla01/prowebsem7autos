<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('inicio1', function () {
    return view('inicio');
});

Route::get('marcas', function () {
    return view('marcas');
});

Route::get('clientes', function () {
    return view('clientes');
});

Route::get('autos', function () {
    return view('autos');
});

