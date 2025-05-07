@extends('layouts.app')

@section('content')
<div class="container py-4">
    <h1 class="mb-4 text-center">Noticias Recientes</h1>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($noticias as $noticia)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">{{ $noticia->title }}</h5>
                    <p class="card-text">{{ Str::limit($noticia->body, 100) }}</p>
                    <a href="{{ route('noticias.show', $noticia->id) }}" class="btn btn-primary mt-auto">Leer más</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
