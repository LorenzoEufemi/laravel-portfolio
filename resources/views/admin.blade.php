@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <!-- Titolo della pagina -->
    <div class="text-center mb-4">
        <h1 class="fw-bold text-primary">Admin Dashboard</h1>
        <p class="text-muted">Benvenuto nella pagina admin!</p>
    </div>

    <!-- Sezione Utente -->
    <div class="card shadow-sm mb-4">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Utente</h4>
        </div>
        <div class="card-body text-center">
            <h5 class="fw-bold">{{ $user->name }}</h5>
            <p class="text-muted">{{ $user->email }}</p>
        </div>
    </div>

    <!-- Sezione Progetti -->
    <div class="card shadow-sm">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Progetti</h4>
        </div>
        <div class="card-body text-center">
            <h5 class="fw-bold">Gestisci i tuoi progetti</h5>
            <a class="btn btn-primary mt-2" href="{{ route('projects.index') }}">
                <i class="fas fa-folder-open"></i> Visualizza Progetti
            </a>
        </div>
    </div>
</div>
@endsection