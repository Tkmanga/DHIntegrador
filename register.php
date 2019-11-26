<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/register.css">
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
            <a class="nav-link" href="registrarse.php">Registrarse</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="listadoProductos.php">Productos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <main>

    <div class="login-form">
      <form action="">
        <h2 class="text-center">Register</h2>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="First name" required="required">
        </div>
        <div class="form-group">
          <input type="password" class="form-control" placeholder="Last name" required="required">
        </div>
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Email adress" required="required">
        </div>
        <div class="form-group">
          <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="option1">
            <span class="form-check-label">Male</span>
          </label>
          <label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" value="option2">
            <span class="form-check-label">Female</span>
          </label>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>City</label>
            <input type="text" class="form-control">
          </div>
          <div class="form-group col-md-6">
            <label>Country</label>
            <select id="inputState" class="form-control">
              <option> Choose...</option>
              <option>Brazil</option>
              <option selected="">Argentina</option>
              <option>France</option>
              <option>Russia</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label>Create password</label>
          <input class="form-control" type="password">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <div class="border-top card-body text-center">Have an account? <a href="login.php">Log In</a></div>
      </form>
    </div>
  </main>


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