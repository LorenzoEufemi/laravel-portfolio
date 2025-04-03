@extends('layouts.app')
@section('content')
<div class="container">
    <h1 class="text-center mb-4 mt-4">Admin</h1>
    <p class="text-center">Benvenuto nella pagina admin !</p>

    <h4 class="text-center">Utenti</h4>
   
       
            <p class="text-center">Nome: {{ $user->name }} - Email: {{ $user->email }}</p>
        
    

    <h2 class="text-center">Progetti : <a class="" href="{{ route('projects.index') }}">Visualizza</a></h2>
    
    @endsection
    

