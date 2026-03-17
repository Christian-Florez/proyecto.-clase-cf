@extends('layouts.admin')

@section('title', 'Panel de Administración')
@section('admin-title', 'Bienvenido al Panel de Administración')

@section('content')
<div class="row g-4">
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Productos</h5>
                <p class="card-text">Gestiona los productos de la tienda.</p>
                <a href="/product/index" class="btn btn-primary">Ver productos</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Categorías</h5>
                <p class="card-text">Administra las categorías disponibles.</p>
                <a href="/categories" class="btn btn-secondary">Ver categorías</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-body text-center">
                <h5 class="card-title">Usuarios</h5>
                <p class="card-text">Gestiona los usuarios registrados.</p>
                <a href="/users" class="btn btn-dark">Ver usuarios</a>
            </div>
        </div>
    </div>
</div>
@endsection
