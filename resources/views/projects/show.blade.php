@extends('layouts.projects')
@section('title', $project->name)
@section('content')
    <div class="card text-center mb-5">
        <div class="card-header">
            Nome: {{ $project->name }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Cliente: {{ $project->client }}</h5>
            <p class="card-text">{{ $project->summary }}</p>
        </div>
        <div class="card-footer text-body-secondary">
            Periodo: {{ $project->duration }}
        </div>
        <div class="d-flex justify-content-center align-items-center mb-3 gap-2">
            <form action="{{ route('projects.destroy', $project) }}" method="POST"
                onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Elimina</button>
            </form>
            <div>
                <a class="btn btn-warning" href="{{ route('projects.edit', $project) }}">Modifica</a>
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="{{ route('projects.index') }}">Torna a progetti</a>
@endsection
