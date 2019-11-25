<!DOCTYPE html>
<?php

$errores=[];
$nombre= "";
$apellido="";
$password="";
$email = "";

if ($_POST)
{
  if (isset($_POST["nombre"]))
  {
    if(empty($_POST["nombre"]))
    {
      $errores["nombre"]="esta vacio";

    }
    elseif(empty($_POST["nombre"]) || strlen($_POST["nombre"])<=3)
    {
      $errores["nombre"]="le faltan caracteres.";
    }
    else
    {
      $nombre=$_POST["nombre"];
    }
  }

	if (isset($_POST["apellido"]))
  {
    if(empty($_POST["apellido"]))
    {
      $errores["apellido"]="esta vacio";
    }
    elseif(empty($_POST["apellido"]) || strlen($_POST["apellido"])<=3)
    {
      $errores["apellido"]="le faltan caracteres.";
    }
    else
    {
      $apellido=$_POST["apellido"];
    }
  }
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

	if (isset($_POST["password"]))
	{
		if(empty($_POST["password"]))
		{
			$errores["password"]="esta vacio";
		}
		elseif(empty($_POST["password"]) || strlen($_POST["password"])<=6)
		{
			$errores["password"]="caracteres insuficientes";
		}
		elseif (!preg_match('`[a-z]`',$_POST["password"]))
		{
			$errores["password"] = "La clave debe tener al menos una letra minúscula";
		}
		elseif (!preg_match('`[A-Z]`',$_POST["password"]))
		{
	 		$errores["password"] = "La clave debe tener al menos una letra mayúscula";
	 	}
	 elseif (!preg_match('`[0-9]`',$_POST["password"]))
	 	{
	 		$errores["password"] = "La clave debe tener al menos un caracter numérico";
	 	}
	else
		{
			$password=$_POST["password"];
		}
	}

	if(count($errores)==0){
		crearUsuario($nombre,$apellido,$email,$password);
		header("location:login.php");
	}

}

function crearUsuario($nombre,$apellido,$email,$password) {
  $usuario = [
		"nombre"=>$nombre,
		"apellido"=>$apellido,
    "email"=>$email,
    "password" => password_hash($password,PASSWORD_DEFAULT)
  ];

  $base = file_get_contents("json/usuarios.json");
  $datos = json_decode($base,true);
  $datos[]=$usuario;
  $jsonFinal = json_encode($datos);
  file_put_contents("json/usuarios.json",$jsonFinal);
}

?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Registrarse</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
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
          <a class="nav-link active" href="#">Registrarse</a>
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
		<H1>Abrir una cuenta</H1>
		<h4>¿Ya eres un usuario ?<a href="login.php">Inicia sesiòn</a></h4>
		<br>
		<form action="registrarse.php" method="POST">
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="nombre">Nombre</label>
					<input type="text" name="nombre" class="form-control" id="inputnombre4" placeholder="Escriba su Nombre" value="<?=$nombre?>" required>
					<small><?= (isset($errores['nombre'])) ? $errores['nombre'] : "" ?></small>
				</div>
				<div class="form-group col-md-6">
					<label for="apellido">Apellido</label>
					<input type="text" name="apellido" class="form-control" id="inputApellido4" placeholder="Escriba aqui su apellido" value="<?=$apellido?>" required>
					<small><?= (isset($errores['apellido'])) ? $errores['apellido'] : "" ?></small>
				</div>
			</div>
			<div class="form-group">
				<label for="email">Correo Electronico</label>
				<input type="text" name="email" class="form-control" id="inputCorreo" placeholder="Escriba aqui su email" value="<?=$email?>" required>
				<small><?= (isset($errores['email'])) ? $errores['email'] : "" ?></small>
			</div>

			<div class="form-group">
				<label for="password">Contraseña</label>
				<input type="text" name="password" class="form-control" id="password" placeholder="Escriba su Contraseña" required>
				<small><?= (isset($errores['password'])) ? $errores['password'] : "" ?></small>
			</div>
			<?= count($errores) ?>
			<p>
				Al crear una cuenta aceptas nuestras Condiciones de uso y Aviso de Privacidad.
			</p>

			<input type="submit" value="submit">
			<input type="reset" value="reset">
		</form>
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
      <a href="index.php">VendeYa!</a>
    </div>

  </footer>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
