@extends('layouts.app')

@section('title', 'Certificaciones - Robymaq')

@section('body_class', 'bodycertificaciones')

@section('content')
  <div class="container-ce">
    <div class="tituloce">
      <img src="img/robotamarillo.png" alt="robot">
      <div class="tituloce2">
        <h2 class="whitefont">Certificaciones</h2>
      </div>
    </div>
    <div class="apartado1ce">
      <h4 class="azulfont">Estos son sólo algunos de los cursos y certificaciones obtenidos con FANUC Robotics América:</h4>
      <p>
        <ul>
          <li class="lead">Curso de Mantenimiento Eléctrico.</li>
          <li class="lead">Curso de Vision (iRVision/VisLOC i).</li>
          <li class="lead">Curso de Spot Tool.</li>
        </ul>
      </p>
    </div>
    <br />
    <div class="apartado2ce">
      <div>
        <p><img src="img/electrical.png" alt="electrical"  class="imgce cer1"></p>
        <p><button class="boton-azul" onclick="toggleFullScreen1()">Ver en pantalla completa</button></p>
      </div>
      <div>
        <p><img src="img/programming.png" alt="programming"  class="imgce cer2"></p>
        <p><button class="boton-azul" onclick="toggleFullScreen2()">Ver en pantalla completa</button></p>
      </div>
      <div>
        <p><img src="img/spottool.png" alt="spottool" class="imgce cer3"></p>
        <p><button class="boton-azul" onclick="toggleFullScreen3()">Ver en pantalla completa</button></p>
      </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
  </div>
@endsection