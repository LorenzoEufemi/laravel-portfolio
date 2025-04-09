@extends('layouts.projects');
@section('title', 'Crea Progetto');
@section('content')
    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="client" class="form-label">Cliente</label>
            <input type="text" class="form-control" id="client" name="client" required>
        </div>
        <div class="mb-3">
            <label for="summary" class="form-label">Riepilogo</label>
            <textarea class="form-control" id="summary" name="summary" rows="3"></textarea>
        </div>
        <div class="mb-3">
            <label for="type">Tipologia</label>
            <select name="type_id" id="type_id">
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="duration" class="form-label">Durata</label>
            <input type="text" class="form-control" id="duration" name="duration">
        </div>
        <div class="mb-3">
            @foreach ($technologies as $technology)
                <input type="checkbox" name="technologies[]" value="{{ $technology->id }}"
                    id="technology-{{ $technology->id }}">
                <label for="technology-{{ $technology->id }}">{{ $technology->name }}</label>
            @endforeach
        </div>
        <button type="submit" class="btn btn-primary">Crea Progetto</button>
    </form>
    <a href="{{ route('projects.index') }}" class="btn btn-secondary mt-3">Torna a progetti</a>
@endsection
