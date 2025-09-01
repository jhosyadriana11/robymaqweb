<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('Home', function(){
    return view('home');
});

Route::get('Servicios', function(){
    return view('servicios');
});

Route::get('Certificaciones', function() {
    return view('certificaciones');
});

Route::get('Nosotros', function() {
    return view('nosotros');
});

Route::get('Contacto', function() {
    return view('contacto');
});

Route::post('Contacto', 'App\Http\Controllers\Controller@enviar')->name('Contacto.enviar');

Route::get('Terminos', function(){
    return view('terminos');
});

Route::get('Politicas', function(){
    return view('politicas');
});