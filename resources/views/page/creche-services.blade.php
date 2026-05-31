@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/creche-services.css') }}">

<!-- NAV -->
<nav>
    <img src="{{ asset('image/logo ci.png') }}" alt="SERVICES" width="200">

    <ul>
        <li><a href="/">Accueil</a></li>

        <li class="menu">
            <a href="#">Services</a>

            <ul class="submenu">
                <li><a href="/beaute">Beauté</a></li>
                <li><a href="/maison">Maison</a></li>
                <li><a href="/creche">Crèche</a></li>
            </ul>
        </li>

        <li><a href="/prestataire">Prestataire</a></li>
        <li><a href="/connexion">Connexion</a></li>
        <li><a href="/inscription">Inscription</a></li>
        <li><a href="/avis">Avis</a></li>
        <li><a href="/admin">Admin</a></li>
    </ul>
</nav>


<div class="services-page">

    <h1>Nos crèches disponibles</h1>
    <p class="intro">
        Trouvez un espace sûr et adapté pour vos enfants près de chez vous.
    </p>

    <div class="salon">

        <div class="salon-card">
            <img src="{{ asset('image/cc1.jpg') }}">
            <div class="info">
                <h2>Baby Home</h2>
                <p>📍 Cocody</p>
                <p>🧸 Garde d’enfants, éveil</p>
                <p>⭐ 4.9</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <div class="salon-card">
            <img src="{{ asset('image/cc2.jpg') }}">
            <div class="info">
                <h2>Petit Monde</h2>
                <p>📍 Plateau</p>
                <p>🧸 Éveil, repas, sieste</p>
                <p>⭐ 4.8</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <div class="salon-card">
            <img src="{{ asset('image/cc3.jpg') }}">
            <div class="info">
                <h2>Kids Paradise</h2>
                <p>📍 Yopougon</p>
                <p>🧸 Jeux, apprentissage</p>
                <p>⭐ 4.7</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <div class="salon-card">
            <img src="{{ asset('image/cc4.jpg') }}">
            <div class="info">
                <h2>KMOR Crèche</h2>
                <p>📍 Koumassi</p>
                <p>🧸 Garde + activités</p>
                <p>⭐ 4.9</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <div class="salon-card">
            <img src="{{ asset('image/cc5.jpg') }}">
            <div class="info">
                <h2>Sweet Kids Center</h2>
                <p>📍 Marcory</p>
                <p>🧸 Crèche moderne</p>
                <p>⭐ 4.8</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

    </div>

</div>

@endsection