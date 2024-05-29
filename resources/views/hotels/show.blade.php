@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de l'Hôtel</h1>
    <div class="card">
        <div class="card-body">
        <div class="main">
            <ul>
                <li><h5 class="card-title">{{ $hotel->titre }}</h5></li>
                <li><p class="card-text"><strong>Adresse:</strong> {{ $hotel->adresse }}</p></li>
                <li><p class="card-text"><strong>Prix Unitaire:</strong> {{ $hotel->prix_unitaire }} DH</p></li>
                <li><p class="card-text"><strong>Type de Chambre:</strong> {{ $hotel->type_chambre }}</p></li>
            </ul>
        </div>
    </div>
    </div>
    <a href="{{ route('hotels.index') }}" class="button">Retour</a>
</div>
@endsection
