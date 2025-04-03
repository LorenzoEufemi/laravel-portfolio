@extends('layouts.projects')

@section('title', 'Progetti');

@section('content')
<table class="table table-striped mb-5">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Cliente</th>
            <th>Visualizza</th>
            
        </tr>
    </thead>
    <tbody>
        @foreach ($projects as $project)
            <tr>
                
                <td>{{ $project->name }}</td>
                <td>{{ $project->client }}</td>
                <td><a href="{{ route('projects.show', $project) }}">Visualizza</a></td>
            </tr>
        @endforeach



</table>

<a href="{{ route('admin.index') }}">Torna alla pagina Admin</a>

@endsection