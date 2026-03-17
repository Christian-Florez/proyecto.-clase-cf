@extends('layouts.app')

@section('title', 'Bienvenido a nuestro Ecommerce')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center bg-light p-5 rounded">
        <h1 class="display-4">¡Bienvenido a nuestro Ecommerce!</h1>
        <p class="lead">Descubre los mejores productos, ofertas exclusivas y una experiencia de compra única.</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="/productos" role="button">Ver productos</a>
    </div>
    <div class="row mt-5">
        <div class="col-md-4">
            <h3>Variedad de productos</h3>
            <p>Encuentra todo lo que necesitas en un solo lugar, desde tecnología hasta moda y hogar.</p>
        </div>
        <div class="col-md-4">
            <h3>Ofertas exclusivas</h3>
            <p>Aprovecha descuentos y promociones especiales solo para nuestros clientes.</p>
        </div>
        <div class="col-md-4">
            <h3>Compra segura</h3>
            <p>Tu seguridad es nuestra prioridad. Compra con confianza y recibe soporte personalizado.</p>
        </div>
    </div>
</div>
@endsection
