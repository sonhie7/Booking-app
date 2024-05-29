@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informations de l'Internaute</h1>
    <div class="card">
        <div class="card-body">
        <div class="main">
  <div class="error-alert">
    <div class="flex">
      <div class="flex-shrink-0">
      <div class="error-prompt-wrap">
          <ul class="error-prompt-list" role="list">
            <li><h5 class="card-title">Nom et Prenom: {{ $internaute->nom }} {{ $internaute->prenom }}</h5></li>
            <li><p class="card-text"><strong>Adresse:</strong> {{ $internaute->adresse }}</p></li>
            <li><p class="card-text"><strong>Date de Naissance:</strong> {{ $internaute->date_naissance }}</p></li>
            <li><p class="card-text"><strong>CIN:</strong> {{ $internaute->cin }}</p></li>
        </ul>
            
        </div>
        
    </div>
</div>
</div>
    </div>
  </div>
  <a href="{{ route('internautes.index') }}" class="button">Retour</a>
</div>
@endsection
