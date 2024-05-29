@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Hôtels</h1>
    <a href="{{ route('hotels.create') }}" class="btn">Ajouter un Hôtel</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Adresse</th>
                <th>Prix Unitaire</th>
                <th>Type de Chambre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hotels as $hotel)
                <tr>
                    <td>{{ $hotel->id }}</td>
                    <td>{{ $hotel->titre }}</td>
                    <td>{{ $hotel->adresse }}</td>
                    <td>{{ $hotel->prix_unitaire }} DH</td>
                    <td>{{ $hotel->type_chambre }}</td>
                    <td>
                        <a href="{{ route('hotels.show', $hotel->id) }}" class="button">Voir</a>
                        <a href="{{ route('hotels.edit', $hotel->id) }}" class="button">Éditer</a>
                        <a href="#" class="button" onclick="event.preventDefault(); deleteHotel('{{ route('hotels.destroy', $hotel->id) }}');">Supprimer</a>
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
    function deleteHotel(url) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cet hôtel ?')) {
            const form = document.getElementById('delete-form');
            form.action = url;
            form.submit();
        }
    }
</script>