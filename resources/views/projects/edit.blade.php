@extends('layouts.projects');
@section('title', 'Modifica Progetto');
@section('content')
    <form action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}" required>
        </div>
        <div class="mb-3">
            <label for="client" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="client" name="client" value="{{ $project->client }}"
                required>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Riepilogo</label>
            <textarea class="form-control" id="summary" name="summary" rows="3">{{ $project->summary }}</textarea>
        </div>
        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select name="type_id" id="type_id" class="form-control">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                        {{ $type->name }}
                    </option>
                @endforeach
            </select>


        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="text" class="form-control" id="duration" name="duration" value="{{ $project->duration }}">
        </div>
        <button type="submit" class="btn btn-primary">Modifica Progetto</button>
    </form>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Torna a progetti</a>
@endsection
