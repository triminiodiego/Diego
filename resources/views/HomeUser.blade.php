@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container-fluid text-center mt-5">
    <h1 class="mb-4">Bienvenido a AgilDesk</h1><div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{ asset('img/imagen1.jpg') }}" class="d-block mx-auto w-100 rounded shadow" style="height: 630px; object-fit: cover;" alt="Imagen 1">
        </div>
        <div class="carousel-item">
            <img src="{{ asset('img/imagen3.jpg') }}" class="d-block mx-auto w-100 rounded shadow" style="height: 500px; object-fit: cover;" alt="Imagen 3">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<p class="lead mt-3">Tu tablero digital para organizar Sprints de manera eficiente y colaborativa.</p>

<div class="row mt-5">
    <div class="col-md-4">
        <h3 class="mt-3">Tablero Visual</h3>
        <p>Organiza tareas con un tablero intuitivo basado en metodologías ágiles.</p>
        <img src="{{ asset('img/imagen2.jpg') }}" alt="Imagen 2" class="rounded shadow img-fluid w-100" style="height: 500px; object-fit: cover;">
    </div>

    <div class="col-md-4">
        <h3 class="mt-3">Colaboración en Tiempo Real</h3>
        <p>Comparte avances con tu equipo y gestiona tareas de forma efectiva.</p>
        <img src="{{ asset('img/imagen4.jpg') }}" alt="Imagen 4" class="rounded shadow img-fluid w-100" style="height: 500px; object-fit: cover;">
    </div>

    <div class="col-md-4">
        <h3 class="mt-3">Seguimiento de Sprints</h3>
        <p>Monitorea el progreso de cada Sprint y ajusta tareas según sea necesario.</p>
        <img src="{{ asset('img/imagen5.jpg') }}" alt="Imagen 5" class="rounded shadow img-fluid w-100" style="height: 500px; object-fit: cover;">
    </div>
</div>

<div class="mt-5">
    <a href="{{ route('sprints.create') }}" class="btn btn-primary btn-lg">Crear un Sprint</a>
    <a href="{{ route('login') }}" class="btn btn-secondary btn-lg">Iniciar Sesión</a>
</div>

</div>
@endsection