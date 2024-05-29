@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Éditer Internaute</h1>
    <form action="{{ route('internautes.update', $internaute->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" value="{{ $internaute->nom }}" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" value="{{ $internaute->prenom }}" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" value="{{ $internaute->adresse }}" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control" value="{{ $internaute->date_naissance }}" required>
        </div>
        <div class="form-group">
            <label for="cin">CIN</label>
            <input type="text" name="cin" class="form-control" value="{{ $internaute->cin }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>
@endsection
