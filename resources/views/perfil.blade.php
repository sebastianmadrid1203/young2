{{-- filepath: c:\xampp\htdocs\yostar\resources\views\perfil.blade.php --}}
@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="text-center mb-4">Perfil de Usuario</h1>

    <div class="card mx-auto mb-4" style="max-width: 600px;">
        <div class="card-body">
            <h5 class="card-title">Información del Usuario</h5>
            <p><strong>Nombre:</strong> {{ $user->name }}</p>
            <p><strong>Correo Electrónico:</strong> {{ $user->email }}</p>
            <p><strong>Fecha de Registro:</strong> {{ $user->created_at->format('d/m/Y') }}</p>
        </div>
    </div>

    <h2 class="text-center mb-4">Crear un Foro</h2>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('forums.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre del Foro</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Escribe el nombre del foro" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="4" placeholder="Escribe una descripción para el foro"></textarea>
        </div>
        <div class="mb-3">
            <label for="category_id" class="form-label">Categoría</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Selecciona una categoría</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear Foro</button>
    </form>
</div>
@endsection
