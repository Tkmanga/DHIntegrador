<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="\css\app.css">
    <link rel="stylesheet" href=@yield('estilo2')>
    <link rel="stylesheet" href=@yield('fqa')>
    <link rel="stylesheet" href=@yield('listadoProductos')>
  </head>

  <body>
      <header>
      <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="http://localhost:8000/compreya">CompreYa!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/fqa">FQA</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/contacto">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/registrarse">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/listadoProductos">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost:8000/login">Login</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    @yield('main')

    <footer class="page-footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">

      <div class="row">

        <div class="col-md-6 mt-md-0 mt-3">

          <h5 class="text-uppercase">Todos los derechos reservados</h5>
          <p>Links y lineas de contacto: </p>

        </div>
        <hr class="clearfix w-100 d-md-none pb-3">

        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Redes Sociales</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Facebook 1</a>
            </li>
            <li>
              <a href="#!">Twitter 2</a>
            </li>
            <li>
              <a href="#!">Instagram 3</a>
            </li>
            <li>
              <a href="#!">Gmail 4</a>
            </li>
          </ul>

        </div>
        <div class="col-md-3 mb-md-0 mb-3">

          <h5 class="text-uppercase">Redes Contacto</h5>

          <ul class="list-unstyled">
            <li>
              <a href="#!">Mail RRHH 1</a>
            </li>
            <li>
              <a href="#!">Atencion empresas</a>
            </li>
            <li>
              <a href="#!">Atencion particulares</a>
            </li>
            <li>
              <a href="#!">Denuncias</a>
            </li>
          </ul>

        </div>

      </div>
    </div>
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
      <a href="#!">VendeYa!</a>
    </div>

  </footer>
  </body>
</html>
