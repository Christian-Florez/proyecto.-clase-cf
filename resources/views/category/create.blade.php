@extends('layouts.admin')

@section('title', 'Nueva Categoría')
@section('admin-title', 'Crear Categoría')

@section('content')
<div class="card bg-white p-4">
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
