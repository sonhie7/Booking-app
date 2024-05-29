<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Booking app</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Custom Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Inline Navbar Styles -->
    
</head>
<body>
    <div id="app">
        <nav class="navbar">
            <a href="{{ url('/') }}">Booking app</a>
            <a href="{{ route('internautes.index') }}">Internautes</a>
            <a href="{{ route('hotels.index') }}">Hôtels</a>
            <a href="{{ route('reservations.index') }}">Réservations</a>
            
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <!-- Custom Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
