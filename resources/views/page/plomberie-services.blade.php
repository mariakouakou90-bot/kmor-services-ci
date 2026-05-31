@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/plomberie-services.css') }}">

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

    <h1>Nos plombiers disponibles</h1>
    <p class="intro">Trouvez rapidement un plombier qualifié près de chez vous.</p>

    <div class="salon">

        <div class="salon-card">
            <img src="{{ asset('image/P1.jpg') }}">
            <div class="info">
                <h2>Pro Plomberie Services</h2>
                <p>📍 Cocody</p>
                <p>🔧 Fuite d’eau, robinet, dépannage</p>
                <p>⭐ 4.8</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <div class="salon-card">
            <img src="{{ asset('image/P2.jpg') }}">
            <div class="info">
                <h2>Aqua Fix Pro</h2>
                <p>📍 Plateau</p>
                <p>🔧 Sanitaires, maintenance</p>
                <p>⭐ 4.7</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <div class="salon-card">
            <img src="{{ asset('image/P3.jpg') }}">
            <div class="info">
                <h2>Expert Canalisation</h2>
                <p>📍 Yopougon</p>
                <p>🔧 Débouchage, réparation</p>
                <p>⭐ 4.6</p>
                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

         <!-- 4 -->
        <div class="salon-card">
           <img src="{{ asset('image/P4.jpg') }}">

            <div class="info">
                <h2>Home Repair Plus</h2>
                <p>📍 Koumassi</p>
                <p>🔧 Douche, évier, WC</p>
                <p>⭐ 4.5 (68 avis)</p>
                <p class="commentaire">💬 "Très bon service, je recommande."</p>

                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

        <!-- 5 -->
        <div class="salon-card">
           <img src="{{ asset('image/P5.jpg') }}">

            <div class="info">
                <h2>KMOR Plomberie</h2>
                <p>📍 Marcory</p>
                <p>🔧 Rénovation cuisine, salle de bain</p>
                <p>⭐ 4.9 (110 avis)</p>
                <p class="commentaire">💬 "Excellent résultat, travail soigné."</p>

                <a href="/reservation" class="btn">Réserver</a>
            </div>
        </div>

    </div>

</div>

@endsection