@extends('layouts.projects');
@section('title', 'Modifica Tipologia');
@section('content')
<form action="{{ route('types.update', $type) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ $type->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifica Tipologia</button>
</form>
<a href="{{ route('types.index') }}" class="btn btn-secondary mt-3">Torna a tipologie</a>
@endsection