@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Liste des Réservations</h1>
    <a href="{{ route('reservations.create') }}" class="btn">Créer une Réservation</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID Internaute</th>
                <th>ID Hôtel</th>
                <th>Date Début</th>
                <th>Date Fin</th>
                <th>Titre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id_internaute }}</td>
                    <td>{{ $reservation->id_hotel }}</td>
                    <td>{{ $reservation->date_debut_sejour }}</td>
                    <td>{{ $reservation->date_fin_sejour }}</td>
                    <td>{{ $reservation->titre }}</td>
                    <td>
                        <a href="{{ route('reservations.show', $reservation->id) }}" class="button">Voir</a>
                        <a href="{{ route('reservations.edit', $reservation->id) }}" class="button">Éditer</a>
                        <a href="#" class="button" onclick="event.preventDefault(); deleteReservation('{{ route('reservations.destroy', $reservation->id) }}');">Supprimer</a>
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
    function deleteReservation(url) {
        if (confirm('Êtes-vous sûr de vouloir supprimer cet reservation ?')) {
            const form = document.getElementById('delete-form');
            form.action = url;
            form.submit();
        }
    }
</script>