@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Détails de la Réservation</h1>
    <div class="card">
        <div class="card-body">
            <div class="main">
                <ul>
                    <li><h5 class="card-title">{{ $reservation->titre }}</h5></li>
                    <li><p class="card-text"><strong>ID Internaute:</strong> {{ $reservation->id_internaute }}</p></li>
                    <li><p class="card-text"><strong>ID Hôtel:</strong> {{ $reservation->id_hotel }}</p></li>
                    <li><p class="card-text"><strong>Date Début Séjour:</strong> {{ $reservation->date_debut_sejour }}</p></li>
                    <li><p class="card-text"><strong>Date Fin Séjour:</strong> {{ $reservation->date_fin_sejour }}</p></li>
                </ul>
            </div>
            
            
            <a href="{{ route('reservations.index') }}" class="button">Retour</a>
        </div>
    </div>
</div>
@endsection
