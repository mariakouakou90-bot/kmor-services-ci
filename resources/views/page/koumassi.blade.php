@extends('layouts.app')

@section('content')

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/koumassi.css') }}">

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

    <!-- SALON 1 -->
    <div class="salon-card">
        <img src="{{ asset('image/C21.jpg') }}" alt="ORNELLA SALON">

        <div class="info">
            <h2>ORNELLA SALON</h2>
            <p>📍 Koumassi Remblais</p>
            <p>⭐ 4.8 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Salon moderne spécialisé en tresses, brushing, coloration.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 2 -->
    <div class="salon-card">
        <img src="{{ asset('image/C22.jpg') }}" alt="Hair Blaam Beauty">

        <div class="info">
            <h2>Hair Blaam Beauty</h2>
            <p>📍 Koumassi Campement</p>
            <p>⭐ 4.8 (120 avis)</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Tresses, brushing et soins capillaires.</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 3 -->
    <div class="salon-card">
        <img src="{{ asset('image/C19.jpg') }}" alt="GLOW UP">

        <div class="info">
            <h2>GLOW UP</h2>
            <p>📍 Koumassi Prodomo</p>
            <p>⭐ 4.0</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Coiffure homme et femme.</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 4 -->
    <div class="salon-card">
        <img src="{{ asset('image/C20.jpg') }}" alt="SALON DE COIFFURE">

        <div class="info">
            <h2>SALON DE COIFFURE</h2>
            <p>📍 Koumassi Mosquée</p>
            <p>⭐ 4.0</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Coiffure femme, homme et enfants.</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 5 -->
    <div class="salon-card">
        <img src="{{ asset('image/C24.jpg') }}" alt="THE BARBER SHOP">

        <div class="info">
            <h2>THE BARBER SHOP</h2>
            <p>📍 Koumassi Sicogi</p>
            <p>⭐ 4.0</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Coupe homme, barbe, styling.</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 6 -->
    <div class="salon-card">
        <img src="{{ asset('image/C23.jpg') }}" alt="BARBERARIA DOZE">

        <div class="info">
            <h2>BARBERARIA DOZE</h2>
            <p>📍 Grand Carrefour</p>
            <p>⭐ 4.2</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p>Salon homme moderne.</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

</div>

<!-- SCRIPT -->
<script>
    function toggleInfo(btn) {
        let details = btn.nextElementSibling;

        if (details.style.display === "block") {
            details.style.display = "none";
        } else {
            details.style.display = "block";
        }
    }
</script>

@endsection