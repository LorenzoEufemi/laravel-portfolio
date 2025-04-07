@extends('layouts.projects')

@section('title', 'Tipologie');

@section('content')

    <a class="btn btn-primary mt-3 mb-5" href="{{ route('types.create') }}">Aggiungi una tipologia</a>
    <table class="table table-striped mb-5">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrizione</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($types as $type)
                <tr>
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    
                    <td><a class="btn btn-warning" href="{{ route('types.edit', $type) }}">Modifica</a></td>
                    <td>
                        <form action="{{ route('types.destroy', $type) }}" method="POST"
                            onsubmit="return confirm('Sei sicuro di voler eliminare questa tipologia?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
<div class="d-flex justify-content-between">
    <a class="btn btn-primary" href="{{ route('admin.index') }}">Torna alla pagina Admin</a>
    <a class="btn btn-primary" href="{{ route('projects.index') }}">Vai alla pagina Progetti</a>
</div>




@endsection