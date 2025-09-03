@extends('layouts.app')

@section('title', 'Certificaciones - Robymaq')

@section('body_class', 'bodycertificaciones')

@section('content')
  <div class="container-ce">
    <div class="titulo">
      <img src="img/fondost/robotamarillo.png" alt="robot" class="imgce">
      <div class="titulo2">
        <h1 class="whitefont">Certificaciones</h1>
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
        <p><img src="img/cert/electrical.png" alt="electrical"  class="imgcer cer1"></p>
        <p><button class="boton-azul" onclick="toggleFullScreen1()">Ver en pantalla completa</button></p>
      </div>
      <div>
        <p><img src="img/cert/programming.png" alt="programming"  class="imgcer cer2"></p>
        <p><button class="boton-azul" onclick="toggleFullScreen2()">Ver en pantalla completa</button></p>
      </div>
      <div>
        <p><img src="img/cert/spottool.png" alt="spottool" class="imgcer cer3"></p>
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