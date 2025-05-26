<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    print "HOLA MUNDO TIS1 activa ... 26 Mayo 2025 10.06";
    return view('welcome');
});

Route::get('/saludos', function () {
    print "HOLA MUNDO TIS1 activa creando la ruta /SALUDOS... 26 Mayo 2025 10.06";
});
