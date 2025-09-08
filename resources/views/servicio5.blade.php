@extends('layouts.app')

@section('title', 'Integracion y automatizacion - Robymaq')

@section('body_class', 'bodyservicios')

@section('content')
  <div class="container-s5">
    <div class="titulo">
      <img class="imgs5" src="img/galeria/coherix/coherix4.jpg" alt="coherix">
      <div class="titulos5">
        <h1 class="whitefont">Integración y automatización</h1>
      </div>
    </div>
    <div>
      <a href="Servicios" class="btnvolver"><img src="img/iconos/arrow-left.png" alt="">Volver a servicios</a>
    </div>
    <div class="apartado1s5">
      <div class="apartado1s5p1">
        <img src="img/iconos/logos2.png" alt="" class="imglogosb">
      </div>
      <div class="apartado1s5p2">
        <h4 class="azulfont">Integración y automatización</h4>
        <p class="lead justify linea-izq">Ofrecemos servicios de integraciones de líneas de proceso con celdas de 
            robots para ayudar a mejorar la eficiencia y calidad en las líneas de producción.
        </p>
      </div>
    </div>
    <div class="collage5">
      <img src="img/galeria/coherix/coherix1.jpg" alt="" class="">
      <img src="img/galeria/cobota2/cobota21.png" alt="" class="">
      <img src="img/galeria/cobota1/cobota11.jpeg" alt="" class="">
      <img src="img/galeria/coherix/coherix4.jpg" alt="" class="">
      <img src="img/galeria/coherix/coherix5.png" alt="" class="">
      <img src="img/galeria/coherix/coherix3.jpg" alt="" class="">              
    </div>
    <div class="apartado2s5">
      <div class="apartado2s5p1">
        <h4 class="azulfont">Apoyo para arranque de proyectos</h4>
        <br />
        <br />
        <h5 class="azulfont">Simulación y apoyo en planta para arranque de proyectos</h5>
        <p class="lead justify linea-izq">
          Simulación de proyectos para robots para proporcionar un soporte integral durante el ciclo de vida 
          de la producción, desde la ejecución de simulaciones y pruebas en run offs y buy offs, hasta la puesta en marcha de la producción 
          en startups, asegurando una implementación exitosa.
        </p>
      </div>
      <div class="apartado2s5p2">
        <p class="video-s5">
          <video width="100%" height="100%" controls>
            <source src="img/galeria/coherix/coherixvideo.mp4" type="video/mp4">
          </video>
        </p>
      </div>
    </div>
  </div>
@endsection