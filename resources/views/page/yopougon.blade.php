@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/yopougon.css') }}">

<!-- NAVBAR -->
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


<!-- LISTE DES SALONS -->
<div class="salon">

    <!-- Carte 1 -->
    <div class="salon-card">
        <img src="{{ asset('image/C16.jpg') }}" alt="salon">

        <div class="info">
            <h2>HAIRCUTE&SHAVE</h2>
            <p>📍 Yopougon Niangon</p>
            <p>⭐ 4.8 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Salon moderne spécialisé en tresses, brushing, coloration et soins capillaires.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 2 -->
    <div class="salon-card">
        <img src="{{ asset('image/C15.jpg') }}" alt="salon">

        <div class="info">
            <h2>HOUSE OF SHAVES</h2>
            <p>📍 Yopougon Siporex</p>
            <p>⭐ 4.8 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Tresses, brushing, coloration et soins capillaires.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 3 -->
    <div class="salon-card">
        <img src="{{ asset('image/C13.jpg') }}" alt="salon">

        <div class="info">
            <h2>COIFFURE A PETIT PRIX</h2>
            <p>📍 Yopougon Sideci</p>
            <p>⭐ 4.0 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Coupe moderne, rasage, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 19h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 4 -->
    <div class="salon-card">
        <img src="{{ asset('image/C14.jpg') }}" alt="salon">

        <div class="info">
            <h2>STYLE SALON</h2>
            <p>📍 Yopougon Maroc</p>
            <p>⭐ 4.0 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Coupe homme, barbe, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 5 -->
    <div class="salon-card">
        <img src="{{ asset('image/C17.jpg') }}" alt="salon">

        <div class="info">
            <h2>REEL NICE</h2>
            <p>📍 Yopougon Toit Rouge</p>
            <p>⭐ 4.0 (100 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Coiffure femme, homme et enfants.</p>
                <p>Ouvert : Lun - Sam / 8h à 19h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 6 -->
    <div class="salon-card">
        <img src="{{ asset('image/C18.jpg') }}" alt="salon">

        <div class="info">
            <h2>KMOR COIFFURE</h2>
            <p>📍 Yopougon Selmer</p>
            <p>⭐ 4.2 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Salon mixte : femme, homme, enfants.</p>
                <p>Ouvert : Lun - Sam / 8h à 19h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

</div>

<script>
function toggleInfo(btn){
    let details = btn.nextElementSibling;

    if(details.style.display === "block"){
        details.style.display = "none";
    } else {
        details.style.display = "block";
    }
}
</script>

@endsection