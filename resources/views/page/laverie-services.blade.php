@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/laverie-services.css') }}">

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

    <h1>Nos laveries disponibles</h1>
    <p class="intro">Confiez votre linge à des professionnels proches de chez vous.</p>

    <div class="salon">

        <!-- 1 -->
        <div class="salon-card">
            <img src="{{ asset('image/LL1.jpg') }}" alt="laverier">
            <div class="info">
                <h2>Eve</h2>
                <p>📍 Cocody</p>
                <p>🧺 Lavage rapide, repassage, pressing</p>
                <p>⭐ 4.8 (90 avis)</p>
                <p class="commentaire">💬 "Mon linge est revenu impeccable."</p>
                <a href="Laverie l.html" class="btn">Réserver</a>
            </div>
        </div>

        <!-- 2 -->
        <div class="salon-card">
           <img src="{{ asset('image/LL2.jpg') }}" alt="laverier">
            <div class="info">
                <h2>FRESH & CLEAN</h2>
                <p>📍 Plateau</p>
                <p>🧺 Pressing, costumes, chemises</p>
                <p>⭐ 4.7 (75 avis)</p>
                <p class="commentaire">💬 "Service rapide et soigné."</p>
                <a href="Laverie l.html" class="btn">Réserver</a>
            </div>
        </div>

        <!-- 3 -->
        <div class="salon-card">
            <img src="{{ asset('image/LL3.jpg') }}" alt="laverier">
            <div class="info">
                <h2>Wash Pro</h2>
                <p>📍 Yopougon</p>
                <p>🧺 Couettes, draps, vêtements</p>
                <p>⭐ 4.6 (68 avis)</p>
                <p class="commentaire">💬 "Très bon rapport qualité/prix."</p>
                <a href="Laverie l.html" class="btn">Réserver</a>
            </div>
        </div>

        <!-- 4 -->
        <div class="salon-card">
            <img src="{{ asset('image/LL4.jpg') }}" alt="laverier">
            <div class="info">
                <h2>LAUNDRY HUB</h2>
                <p>📍 Koumassi</p>
                <p>🧺 Lavage, repassage, livraison</p>
                <p>⭐ 4.9 (110 avis)</p>
                <p class="commentaire">💬 "Service excellent et ponctuel."</p>
                <a href="Laverie l.html" class="btn">Réserver</a>
            </div>
        </div>

        <!-- 5 -->
        <div class="salon-card">
           <img src="{{ asset('image/LL5.jpg') }}" alt="laverier">
            <div class="info">
                <h2>LAUNDRY</h2>
                <p>📍 Marcory</p>
                <p>🧺 Pressing premium, linge délicat</p>
                <p>⭐ 4.8 (88 avis)</p>
                <p class="commentaire">💬 "Travail très professionnel."</p>
                <a href="Laverie l.html" class="btn">Réserver</a>
            </div>
        </div>

    </div>

</div>

@endsection