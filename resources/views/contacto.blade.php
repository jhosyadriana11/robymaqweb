@extends('layouts.app')

@section('title', 'Contacto - Robymaq')

@section('body_class', 'bodycontacto')

@section('content')
  <div class="container-c">
    <div class="titulo">
      <img src="img/robotamarillo.png" alt="robot">
      <div class="titulo2">
        <h1 class="whitefont">Contacto</h1>
      </div>
    </div>
    <div class="apartado1c">
      <p class="naranjafont bold neuropol center">ROBYMAQ</p>
      <h4 class="center negrita">Servicio de Robótica y Maquinaria S.A. de C.V.</h4>
    </div>
    <div class="c1c">
      <div class="apartado2c">
        <div class="center negrita">
          <h4 class="azulfont">Ing. Ángel González</h4>
          <h4 class="azulfont">Operaciones y Servicio</h4>
        </div>
        <br />
        <p class="azulfont negrita">Email:</p><p>angel.gonzalez@robymaq.com</p>
        <p class="azulfont negrita">Teléfono oficina:</p><p>449 975 4474</p>
        <p class="azulfont negrita">Dirección:</p><p>Calle Nazario Ortiz Garza #210, Colonia Santa Anita</p>
        <p class="azulfont negrita">Código postal:</p><p>20169. Aguascalientes, Aguascalientes</p>
        <p class="azulfont negrita">Horario:</p><p>Lunes a viernes de 8:00 a.m. a 5:00 p.m.</p>
      </div>
      <div class="apartado3c">
        <div class="formulario">
          <h4 class="apartado3cp1 center azulfont">Envíanos un mensaje</h4>
          <form method="POST" action="Contacto" role="form" autocomplete="off" onsubmit="return validateForm()">
            @csrf
            <input type="text" name="honeypot" autocomplete="off" id="honeypot">
            <label for="name">Nombre</label>
            <input type="text" id="nombre" name="name" placeholder="Tu nombre completo">

            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="tucorreo@ejemplo.com">

            <label for="subject">Asunto</label>
            <input type="text" id="subject" name="subject" placeholder="Asunto del mensaje">

            <label for="content">Mensaje</label>
            <textarea id="content" name="content" rows="5" placeholder="Escribe tu mensaje"></textarea>

            <span class="msg-error error"></span>
            <div id="recaptcha" class="g-recaptcha" data-sitekey="6LfqVeEnAAAAAE0uqCyVRVnt-IPfUvvB3AvihBmk">

            <button type="submit">Enviar</button>
          </form>
        </div>
      </div>
    </div>
    
  </div>

@endsection