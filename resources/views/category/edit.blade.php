@extends('layouts.admin')

@section('title', 'Editar Categoría')
@section('admin-title', 'Editar Categoría')

@section('content')
<div class="card bg-white p-4">
    <form action="{{ route('category.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea name="description" id="description" class="form-control">{{ $category->description }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('category.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
@endsection
