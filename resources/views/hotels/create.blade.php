@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter un Hôtel</h1>
    <form action="{{ route('hotels.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire</label>
            <input type="number" name="prix_unitaire" class="form-control" required>
        </div>
        <div class="form-group">
    <label for="type_chambre">Type de Chambre</label>
    <div class="checkbox-group">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="single" name="type_chambre[]" value="Single">
            <label class="form-check-label" for="single">Individuelle</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="double" name="type_chambre[]" value="Double">
            <label class="form-check-label" for="double">Double</label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="suite" name="type_chambre[]" value="Suite">
            <label class="form-check-label" for="suite">Suite</label>
        </div>
        <!-- Ajoutez d'autres cases à cocher selon vos besoins -->
    </div>
</div>


        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>
@endsection
