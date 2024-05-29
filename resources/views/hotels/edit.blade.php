@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Éditer Hôtel</h1>
    <form action="{{ route('hotels.update', $hotel->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="titre">Titre</label>
            <input type="text" name="titre" class="form-control" value="{{ $hotel->titre }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" value="{{ $hotel->adresse }}" required>
        </div>
        <div class="form-group">
            <label for="prix_unitaire">Prix Unitaire</label>
            <input type="number" name="prix_unitaire" class="form-control" value="{{ $hotel->prix_unitaire }}" required>
        </div>
        <div class="form-group">
            <label for="type_chambre">Type de Chambre</label>
            <input type="text" name="type_chambre" class="form-control" value="{{ $hotel->type_chambre }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
