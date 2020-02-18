@extends('plantilla')
@section('title')
  Carrito
@endsection
@section('estilo2')
  "\css\shoppingCart.css"
@endsection
@section('main')
  <div class="page-header">
    <h1>Products
      <div style="float: right; cursor: pointer;">
        <span class="glyphicon glyphicon-shopping-cart my-cart-icon"><span class="badge badge-notify my-cart-badge"></span></span>
      </div>
    </h1>
  </div>

    <div class="row">
      <div class="col-md-3 text-center">
        <img src="img/carrito/remera.jpg">
        <br>
        T-shirt<strong> $100</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/pelota.jpg">
        <br>
        Soccer Ball<strong> $500</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/short.jpg">
        <br>
        Short <strong> $150</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/zapatos.jpg">
        <br>
        Dress Shoes <strong> $1200</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/jeans.jpg">
        <br>
        Jeans<strong> $2000</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/camisa.jpg">
        <br>
        Shirt<strong> $300</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/lentes.jpg">
        <br>
        Glasses<strong> $300</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
      <div class="col-md-3 text-center">
        <img src="img/carrito/baloncesto.jpg">
        <br>
        Basketball Ball<strong> $350</strong>
        <br>
        <button class="btn btn-danger my-cart-btn">Add to Cart</button>
        <a href="detalles.html" class="btn btn-info">Details</a>
      </div>
    </div>
@endsection
