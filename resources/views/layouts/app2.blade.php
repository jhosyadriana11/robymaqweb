<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles.css" media="screen">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta name="keywords" content="robotica, maquinaria, robots industriales, robymaq">
  <title>@yield('title')</title>
</head>
<body class="@yield('body_class')">
  <header class="header2">
    <a href="/" class="navbar-brand">
      <div>
        <img src="img/logobsf.png" id="logo" alt="logo">
      </div>
    </a>
    <nav class="navbar navbar-expand-lg" aria-label="navbar menu">
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarIndicator" 
          aria-controls="navbarIndicator" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarIndicator">
          <ul class="navbar-nav mb-2 mb-md-0"> 
            <li class="nav-item">
              <a href="/" class="nav-link leadc">HOME</a>
            </li>
            <li class="nav-item">
              <a href="Servicios" class="nav-link leadc">SERVICIOS</a>
            </li>
            <li class="nav-item">
              <a href="Nosotros" class="nav-link leadc">NOSOTROS</a>
            </li>
            <li class="nav-item">
              <a href="Certificaciones" class="nav-link leadc">CERTIFICACIONES</a>
            </li>
            <li class="nav-item">
              <a href="Contacto" class="boton-naranja">CONTACTO</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  @yield('content')
  <footer class="text-center text-lg-start">
    <div class="footer-background"></div>
    <section class="d-flex justify-content-center justify-content-lg-between p-3 border-bottom colorf">
      <div class="d-none d-lg-block">
        <span class="c1footer">¡Sigue conectado con nosotros!</span>
      </div>
      <div>
        <a href="https://www.facebook.com/p/Robymaq-100066237832764/?locale=es_LA" class="me-4 link-secondary redesf">
          <img src="img/fb.png">
        </a>
        <a href="https://www.linkedin.com/company/robymaq/mycompany/" class="me-4 link-secondary redesf">
          <img src="img/in.png">
        </a>
      </div>
    </section>
    <section class="">
      <div class="container text-md-start mt-4">
        <div class="row">
          <div class="col-md-1 col-lg-2 col-xl-2 mb-4 logof mx-lg-auto mx-md-auto">
            <img class="logof" src="img/logo.png" alt="logo" />
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mb-md-0 mb-4 c2f">
            <h6 class="text-uppercase fw-bold mb-4 ">Empresa</h6>
            <p class=""><a href="/" class="link-secondary">Home</a></p>
            <p class=""><a href="Nosotros" class="link-secondary">Nosotros</a></p>
            <p class=""><a href="Certificaciones" class="link-secondary">Certificaciones</a></p>
            <p class=""><a href="Contacto" class="link-secondary">Contacto</a></p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-2 mb-md-0 mb-4 c2f">
            <h6 class="text-uppercase fw-bold mb-4 ">Servicios</h6>
            <p class=""><a href="Mantenimiento y reparacion" class="link-secondary">Mantenimiento y reparación</a></p>
            <p class=""><a href="Programacion" class="link-secondary">Programación</a></p>
            <p class=""><a href="Maquinado de partes" class="link-secondary">Maquinado de partes</a></p>
            <p class=""><a href="Diseño y fabricacion" class="link-secondary">Diseño y fabricación</a></p>
            <p class=""><a href="Apoyo para proyectos" class="link-secondary">Integración y automatización</a></p>
            <p class=""><a href="Capacitacion" class="link-secondary">Capacitación</a></p>
          </div>
          <div class="col-md-2 col-lg-2 col-xl-3 mb-md-0 mb-4 c2f">
            <h6 class="text-uppercase fw-bold mb-4 ">Nos ubicamos en:</h6>
            <p class="">Colonia Santa Anita Calle Nazario Ortiz Garza #210</p>
            <p class="">C.P. 20169. Aguascalientes, Aguascalientes</p>
          </div> 
          <div class="col-md-1 col-lg-4 col-xl-3 mb-md-0 mb-4" >
            <p class=""><iframe class="mapaf" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3701.965662852287!2d-102.27904408513022!3d21.897397985534315!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8429ee3f9a9a1f23%3A0x14df2a607684db73!2sROBYMAQ!5e0!3m2!1ses-419!2smx!4v1670532120213!5m2!1ses-419!2smx" 
              allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </p>
          </div>
        </div>
      </div>
    </section>
    <div class="p-2 colorf border-top c3f">
      <p class="c4f">
        © 2025 Copyright: <a class="text-reset fw-bold" href=""><?php echo $_SERVER['SERVER_NAME']; ?></a>
      </p>
      <ul class="c5f">
        <li class="c6f"><a href="Politicas" class="text-reset">Politicas de privacidad</a></li>
        <li class="c6f"><a href="Terminos" class="text-reset">Términos de uso</a></li>
      </ul>
    </div>
    <button id="scrollToTopBtn" onclick="scrollToTop()">↑</button>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="js/main.js"></script>
</body>
</html>