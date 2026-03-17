@extends('layouts.app')

@section('title', 'Carrito de Compras')

@section('content')
<div class="container mt-5">
    <h1>Carrito de Compras</h1>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if($cartItems->isEmpty())
        <div class="alert alert-info">Tu carrito está vacío.</div>
    @else
    <table class="table table-bordered bg-white">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $item)
                <tr>
                    <td>{{ $item->product->name ?? 'Producto eliminado' }}</td>
                    <td>€{{ number_format($item->price, 2) }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>€{{ number_format($item->price * $item->quantity, 2) }}</td>
                    <td>
                        <form action="{{ route('cart.remove', $item->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="mb-3">
        <strong>Total: €{{ number_format($total, 2) }}</strong>
    </div>
    <form action="{{ route('cart.clear') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-warning">Vaciar carrito</button>
    </form>
    @endif
</div>
@endsection
