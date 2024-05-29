@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer une Réservation</h1>
    <form action="{{ route('reservations.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_internaute">ID Internaute</label>
            <input type="number" name="id_internaute" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_hotel">ID Hôtel</label>
            <input type="number" name="id_hotel" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_debut_sejour">Date Début Séjour</label>
            <input type="date" name="date_debut_sejour" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_fin_sejour">Date Fin Séjour</label>
            <input type="date" name="date_fin_sejour" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
