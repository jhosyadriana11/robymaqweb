@extends('layouts.app')

@section('title', 'Home - Robymaq')

@section('body_class', 'bodyhome')

@section('content')
  <div class="container-h">
    <div class="hero">
      <div class="hero-content">
        <h1 class="">SERVICIO Y REPARACIÓN DE <span style="color: rgb(231,76,61,1);">ROBOTS INDUSTRIALES</span></h1>
        <p class="lead">Brindamos soluciones confiables y eficientes, garantizando resultados óptimos para cualquier tipo de avería</p>
        <p class="lead">Experiencia en marcas líderes como Fanuc, Mitsubishi, ABB y KUKA</p>
        <a href="Servicios" class="boton-naranja">Ver servicios</a>
      </div>
    </div>
    <div class="apartado2h">
      <div class="apartado2hp1">
        <p><img src="img/robots.jpg" alt="robots" class="c3img2h"></p>
      </div>
      <div class="apartado2hp2">
        <h4 class="azulfont center">Servicio y reparación de Robots Industriales</h4>
        <br>
        <p class="lead">Nuestro servicio de reparación de robots industriales cubre cualquier
          tipo de avería como consolas portátiles, servo controladores, paneles de procesador,
          paneles de servo procesadores, paneles de seguridad, paneles de E/S del sistema, paneles
          de interfaz de red o en las propias fuentes de alimentación.</p>
        <p class="lead">El personal está altamente especializado en la reparación de robots
          Fanuc, robots Mitsubishi, robots ABB o Robots KUKA.</p>
        <p class="lead">Nuestro servicio de robots industriales cubre la reparación de
          cualquier tipo de avería.</p>
        <br />
        <a class="boton-naranja btnder" href="Servicios">Leer más sobre servicios</a>
      </div>
    </div>
    <br />
    <div class="container-apartado3h">
      <canvas id="bolitasCanvas"></canvas>
      <div class="apartado3h">
        <div class="apartado3hp1">
          <h3 class="azulfont">Algunas de nuestras especialidades</h3>
        </div>
        <br>
        <div class="apartado3hp2">
          <div class="cuadro3h">
            <p class="bolita3h"><img src="img/bolita3n.png" alt="especialidad" class="bolita3hp1"></p>
            <p class="leadg">Sistemas de visión.</p>
            <p class="leadg">Sistemas de soldadura inteligente, Spot, Arc Welding.</p>
          </div>
          <div class="cuadro3h">
            <p class="bolita3h"><img src="img/bolita1n.png" alt="especialidad" class="bolita3hp1"></p>
            <p class="leadg">Software para industria 4.0.</p>
            <p class="leadg">Sistemas para paletizado automático.</p>
          </div>
          <div class="cuadro3h">
            <p class="bolita3h"><img src="img/bolita2n.png" alt="especialidad" class="bolita3hp1"></p>
            <p class="leadg">Servicios de mantenimiento y reparación de robots industriales.</p>
          </div>
          <div class="cuadro3h">
            <p class="bolita3h"><img src="img/bolita4n.png" alt="especialidad" class="bolita3hp1"></p>
            <p class="leadg">Software para mantenimiento predictivo de robots.</p>
            <p class="leadg">Fabricación de maquinaria en general.</p>
          </div>
        </div>
      </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <div class="apartado4h">
      <div>
        <h3 class="center azulfont">Nuestras soluciones</h3>
      </div>
      <br>
      <div class="apartado4hsol">
        <div class="formaciona4h aparecer">
          <div class="apartado4hp1">
            <img src="img/formacionia.jpg" alt="formación" class="img4h">
          </div>
          <div>
            <h4 class="azulfont">Formación</h4>
            <h5>Formación a empresas y trabajadores</h5>
            <p class="lead">Disponemos de grandes profesionales en formación de robótica y automatización, 
              mantenimiento industrial, montajes BT, ingeniería, normativas, etcpri id, imul.</p>
          </div>
        </div>
        <div class="mantenimientoa4h aparecer">
          <div class="apartado4hp1">
            <img src="img/mantenimientoia.jpg" alt="mantenimiento" class="img4h">
          </div>
          <div>
            <h4 class="azulfont">Mantenimiento Industrial</h4>
            <h5>Instalaciones, maquinaria y equipos</h5>
            <p class="lead">Contratos de mantenimiento, soporte técnico después del periodo de garantía, 
              mantenimiento de sistemas, gestión de datos y copias de seguridad.</p>
            </div>
        </div>
        <div class="ingenieriaa4h aparecer">
          <div class="apartado4hp1">
            <img src="img/ingenieriaia.jpg" alt="ingenieria" class="img4h">
          </div>
          <div>
            <h4 class="azulfont">Ingeniería</h4>
            <h5>Ingeniería y documentación eléctrica</h5>
            <p class="lead">Realizamos la ingeniería y la documentación eléctrica de los sistemas de control,
              utilizando las herramientas estándarizadas por nuestros clientes, en cualquier versión.</p>
            </div>
        </div>
        <div class="automatizaciona4h aparecer">
          <div class="apartado4hp1">
            <img src="img/automatizacionia.jpg" alt="automatizacion" class="img4h">
          </div>
          <div>
            <h4 class="azulfont">Robótica y Automatización</h4>
            <h5>Diseño de robots y sistemas robotizados</h5>
            <p class="lead">Somos integradores de las principales firmas de Robótica Industrial a nivel internacional: 
              Kuka, ABB, Motoman, Yaskawa, Fanuc, Kawasaki, Panasonic.</p>
          </div>
        </div>
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