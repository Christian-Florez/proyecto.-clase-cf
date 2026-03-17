@extends('layouts.app')

@section('title', 'Detalle del Producto')

@section('content')
<div class="container mt-5">
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ $product->image ? asset('storage/'.$product->image) : ($product->image_url ?? 'https://via.placeholder.com/600x400?text=PC') }}" class="img-fluid rounded-start" alt="{{ $product->name }}">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h2 class="card-title">{{ $product->name ?? $product->nombre }}</h2>
                    <h4 class="card-subtitle mb-2 text-muted">€{{ number_format((float)($product->price ?? 0), 2) }}</h4>
                    <p class="card-text">{{ $product->description ?? $product->descripcion }}</p>
                    <p class="card-text"><small class="text-muted">@if(isset($product->category->name)) Categoría: {{ $product->category->name }} @endif</small></p>
                    <a href="/product/index" class="btn btn-secondary mt-3">Volver al listado</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
