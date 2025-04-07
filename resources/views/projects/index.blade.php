@extends('layouts.projects')

@section('title', 'Progetti');

@section('content')
    <a class="btn btn-primary mt-3 mb-5" href="{{ route('projects.create') }}">Aggiungi un progetto</a>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Cliente</th>
                <th>Tipologia</th>
                <th>Visualizza</th>


            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>

                    <td>{{ $project->name }}</td>
                    <td>{{ $project->client }}</td>
                    <td>{{ $project->type->name }}</td>
                    <td><a class="btn btn-success" href="{{ route('projects.show', $project) }}">Visualizza</a></td>
                    <td><a class="btn btn-warning" href="{{ route('projects.edit', $project) }}">Modifica</a></td>
                    <td>
                        <form action="{{ route('projects.destroy', $project) }}" method="POST"
                            onsubmit="return confirm('Sei sicuro di voler eliminare questo progetto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                </tr>
            @endforeach



    </table>
    <div class="d-flex justify-content-between">
        <a class="btn btn-primary" href="{{ route('admin.index') }}">Torna alla pagina Admin</a>
        <a class="btn btn-primary" href="{{ route('types.index') }}">Vai alla pagina Tipologie</a>
    </div>

@endsection
