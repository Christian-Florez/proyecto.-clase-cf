@extends('layouts.admin')

@section('title', 'Categorías')
@section('admin-title', 'Gestión de Categorías')

@section('content')
<div class="mb-3">
    <a href="{{ route('category.create') }}" class="btn btn-success">Nueva Categoría</a>
</div>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
<table class="table table-bordered bg-white">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-sm">Editar</a>
                    <form action="{{ route('category.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Eliminar esta categoría?')">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<div>{{ $categories->links() }}</div>
@endsection
