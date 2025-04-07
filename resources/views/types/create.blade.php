@extends('layouts.projects');
@section('title', 'Crea Tipologia');
@section('content')


    <h1 class="text-center">Crea Tipologia</h1>
    <form action="{{ route('types.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea class="form-control" id="description" name="description" rows="3"></textarea> 
        <button type="submit" class="btn btn-primary">Crea</button>
    </form>


@endsection