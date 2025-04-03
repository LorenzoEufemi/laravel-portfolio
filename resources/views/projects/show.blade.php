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
</div>
<a href="{{ route('projects.index') }}">Torna a progetti</a>
@endsection
