@extends('plantilla')
@section('title')
  PyR
@endsection
@section('estilo2')
  "\css\backgroundBlue.css"
@endsection
@section('fqa')
    "\css\fqa.css"
@endsection
@section('main')

<div class="container">

    <nav id="navbar-example2" class="navbar navbar-light bg-light">
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#dudasGenerales">General</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#dudasComprador">Dudas Comprador</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#dudasVendedor">Dudas Vendedor</a>
      </li>
      <!-- ESTE BOTON TENDRIA QUE DESPLEGAR LAS OPCIONES MIENTRAS QUE LOS DE ARRIBA REDIRIGIR--> 
      <li class="nav-item dropdown align-center">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">Opciones</a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#one">Seguridad</a>
          <a class="dropdown-item" href="#two">Busqueda</a>
          <a class="dropdown-item" href="#three">Red</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#four">Disparidad</a>
          <a class="dropdown-item" href="#five">No recibi el producto</a>
          <a class="dropdown-item" href="#six">Movimiento extraño</a>
          <div role="separator" class="dropdown-divider"></div>
          <a class="dropdown-item" href="#seven">Costo publicar</a>
          <a class="dropdown-item" href="#eight">Costo vender</a>
          <a class="dropdown-item" href="#nine">Costo mantenimiento</a>
        </div>
      </li>
    </ul>
  </nav>



  <div data-spy="scroll" data-target="#navbar-example2" data-offset="0" id="contenido">
<section>
    <div id="" class="iconos">
      <img src="img\fqaQuestion.png" class="rounded-circle"  alt="Responsive image"  id="dudasGenerales">
    </div>
    <h4 id="one"><strong> Seguridad</strong></h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet recusandae! Rerum reiciendis, est, veniam nam eos.</p> <p>Velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
    <h4 id="two"><strong> Busqueda </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet recusandae! Rerum reiciendis, est, veniam nam eos. </p> <p> Velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
    <h4 id="three"> <strong> Red </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet recusandae! Rerum reiciendis, est, veniam nam eos velit illo consequatur.</p> <p>Blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>


    <div class="iconos">
      <img src="img\fqaCustumer.png" class="rounded-circle"  alt="Responsive image" id="dudasComprador">
    </div>
    <h4 id="four"> <strong> Que pasa si el producto no es como se publica? </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit </p> <p>Eveniet recusandae! Rerum reiciendis, est, veniam nam eos velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
    <h4 id="five"> <strong> Si el vendedor no me envia el producto ?</strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet recusandae! Rerum. </p> <p> Reiciendis, est, veniam nam eos velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
    <h4 id="six"><strong> Si el vendedor pide un canal externo de comunicacion? </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet. </p> <p>Recusandae! Rerum reiciendis, est, veniam nam eos velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>


    <div class="iconos">
      <img src="img\fqaSeller.png" class="rounded-circle"  alt="Responsive image" id="dudasVendedor">
    </div>
    <h4 id="seven"> <strong> Cuanto cuesta publicar ? </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet.</p> <p> Recusandae! Rerum reiciendis, est, veniam nam eos velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
    <h4 id="eight"> <strong> Cuanto cobran por venta ? </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit eveniet</p> <p> Iecusandae! Rerum reiciendis, est, veniam nam eos velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
    <h4 id="nine"><strong> La letra chica ? </strong> </h4>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi natus accusamus itaque ad possimus dolorem perferendis suscipit atque magnam, voluptatum sint illo officia distinctio saepe dolores animi, error ipsum, optio reiciendis reprehenderit quasi fugit </p> <p>Zveniet recusandae! Rerum reiciendis, est, veniam nam eos velit illo consequatur blanditiis deserunt voluptatum corporis vitae perferendis architecto ducimus quam culpa earum optio. Suscipit quas veniam vel, placeat praesentium ab rem quae delectus facere iste possimus at, deserunt vitae in sapiente, ducimus. Libero dolorum assumenda dolor, soluta esse magnam iusto cumque quos odio ab rerum, ullam itaque dicta necessitatibus atque commodi vero velit dignissimos tenetur blanditiis.</p>
  </div>

  </section>
</div>
@endsection
