<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>eCommerce</title>

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styleIndex.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="index.php">CompreYa!</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="fqa.php">FQA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="register.php">Registro</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listadoProductos.php">Productos</a>
          </li>

        </ul>
      </div>
    </nav>
  </header>

  <div>
    <div class="container">
      <div class="row">
        <div class="col-sm-8"><img src="img/carrito/remera.jpg"></div>
        <div class="col-sm-4">
          <ul>
            <li>Precio: 100</li>
            <li>Tallas Disponibles:</li>
            <ul>
              <li>S</li>
              <li>M</li>
              <li>L</li>
              <li>XL</li>
            </ul>
            <li>Colores Disponibles:</li>
            <ul>
              <li>Negro</li>
              <li>Rojo</li>
              <li>Verde</li>
            </ul>
            <li>Materiales:</li>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia minima debitis autem magnam numquam vitae amet doloribus iste nam perspiciatis at tenetur quis, molestias ex recusandae provident sequi consequuntur explicabo quisquam
              quasi, ipsa adipisci! Esse quia dignissimos.</p>
          </ul>
        </div>
      </div>
      <h4>Otros productos que quizas te interesen: </h4>
      <div class="row">
        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/pelota.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/short.jpg" width="100px"></a>
        </div>
        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/zapatos.jpg" width="100px"></a>
        </div>

        <div class=" col-6 col-md-3">
          <a href="detalles.html"><img src="img/carrito/jeans.jpg" width="100px"></a>
        </div>

      </div>
    </div>
  </div>


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
  <!-- JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>