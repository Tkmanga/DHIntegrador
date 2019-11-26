<!DOCTYPE html>
<?php
$errores=[];

$email = "";
$password = false;

if ($_POST)
{
  if (isset($_POST["email"]))
  {
    if(empty($_POST["email"]))
    {
      $errores["email"]="tenes que llenar este campo";
    }
    elseif (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
    {
      $errores["email"] = "Este no es un email valido";
    }
    else
    {
      $email = $_POST["email"];
    }
  }
  $password = validarPassword();

  if (validarEmail($email) && $password) {
      header("location:shopping-cart.php");
  }
}

function validarEmail($email) {
  $base = file_get_contents("json/usuarios.json");
  $datos = json_decode($base,true);
  $user=[];
  foreach($datos as $key => $value){
    if(isset($key["email"]) && $key["email"]==$_POST["email"]){
      return true;
    }else {
      $errores["email"]="el usuario no existe";
    }
  }
}

function validarPassword() {
  $base = file_get_contents("json/usuarios.json");
  $datos = json_decode($base,true);
  $user=[];
  foreach($datos as $key => $value){
    if(isset($key["password"])){
      if (password_verify($_POST["password"], $key["password"])) {
        return true;
      }else {
        $errores["password"]="la contraseña no cuadra";
        return false;
      }
    }
  }
}
 ?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
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
            <a class="nav-link" href="#">Login</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <div class="login-form" >
      <form action="login.php" method="POST">
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" class="form-control" placeholder="Username" required="required">
          <small><?= (isset($errores['email'])) ? $errores['email'] : "" ?></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Password" required="required">
          <small><?= (isset($errores['password'])) ? $errores['password'] : "" ?></small>
        </div>
        <div class="form-group">
          <input type="submit"  value="submit">
        </div>
        <div class="clearfix">
          <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
          <a href="#" class="pull-right">Forgot Password?</a>
        </div>
      </form>
      <p class="text-center"><a href="registrarse.html">Create an Account</a></p>
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
