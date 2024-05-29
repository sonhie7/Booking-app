@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Internautes</h1>
    <a href="{{ route('internautes.create') }}" class="btn">Créer un Internaute</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Adresse</th>
                <th>Date de Naissance</th>
                <th>CIN</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($internautes as $internaute)
                <tr>
                    <td>{{ $internaute->id }}</td>
                    <td>{{ $internaute->nom }}</td>
                    <td>{{ $internaute->prenom }}</td>
                    <td>{{ $internaute->adresse }}</td>
                    <td>{{ $internaute->date_naissance }}</td>
                    <td>{{ $internaute->cin }}</td>
                    <td>
                        <a href="{{ route('internautes.show', $internaute->id) }}" class="button">Voir</a>
                        <a href="{{ route('internautes.edit', $internaute->id) }}" class="button">Éditer</a>
                        
                        <a href="#" class="button" onclick="event.preventDefault(); deleteInternaute('{{ route('internautes.destroy', $internaute->id) }}');">Supprimer</a>
                        


                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form id="delete-form" action="" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>
</div>
@endsection
<script>
    function deleteInternaute(url) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cet internaute ?')) {
            const form = document.getElementById('delete-form');
            form.action = url;
            form.submit();
        }
    }
</script>
