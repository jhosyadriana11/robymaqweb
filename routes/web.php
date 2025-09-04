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

Route::get('Mantenimiento y reparacion', function(){
    return view('servicio1');
});

Route::get('Programacion', function(){
    return view('servicio2');
});

Route::get('Maquinado de partes', function(){
    return view('servicio3');
});

Route::get('Diseño y fabricacion', function(){
    return view('servicio4');
});

Route::get('Integracion y automatizacion', function(){
    return view('servicio5');
});

Route::get('Capacitacion', function(){
    return view('servicio6');
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