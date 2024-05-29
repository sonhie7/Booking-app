@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Créer un Internaute</h1>
    <form action="{{ route('internautes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="date_naissance">Date de Naissance</label>
            <input type="date" name="date_naissance" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cin">CIN</label>
            <input type="text" name="cin" class="form-control" required>
        </div>
        <button type="submit" class="button">Créer</button>
    </form>
</div>
@endsection
