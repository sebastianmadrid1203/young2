@extends('layouts.app')

@section('title', 'Crear Noticia')

@section('content')
<div class="container">
    <h1>Crear Noticia</h1>
    <form action="{{ route('noticias.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" name="titulo" class="form-control" id="titulo" required>
        </div>
        <div class="mb-3">
            <label for="contenido" class="form-label">Contenido</label>
            <textarea name="contenido" class="form-control" id="contenido" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection