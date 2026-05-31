@extends('layouts.app')

@section('content')

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/marcory.css') }}">

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
        <img src="{{ asset('image/C21.jpg') }}" alt="ORNELLA SALON 2">

        <div class="info">
            <h2>ORNELLA SALON 2</h2>
            <p>⭐ 4.8 (120 avis)</p>
            <p>📍 Marcory Zone 4</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Tresses, brushing, coloration et soins capillaires.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 2 -->
    <div class="salon-card">
        <img src="{{ asset('image/C22.jpg') }}" alt="Hair Blaam Beauty 2">

        <div class="info">
            <h2>Hair Blaam Beauty 2</h2>
            <p>⭐ 4.0 (120 avis)</p>
            <p>📍 Marcory Résidentiel</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Tresses, brushing, coloration et soins capillaires.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 3 -->
    <div class="salon-card">
        <img src="{{ asset('image/C19.jpg') }}" alt="GLOW UP 2">

        <div class="info">
            <h2>GLOW UP 2</h2>
            <p>⭐ 4.8 (120 avis)</p>
            <p>📍 Marcory Sans Fil</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Salon mixte : femme, homme, enfants.</p>
                <p>Ouvert : Lun - Sam / 8h à 19h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 4 -->
    <div class="salon-card">
        <img src="{{ asset('image/C20.jpg') }}" alt="SALON DE COIFFURE 2">

        <div class="info">
            <h2>SALON DE COIFFURE 2</h2>
            <p>⭐ 3.8 (100 avis)</p>
            <p>📍 Marcory Cap Sud</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Salon mixte : femme, homme, enfants.</p>
                <p>Ouvert : Lun - Sam / 8h à 19h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 5 -->
    <div class="salon-card">
        <img src="{{ asset('image/1.jpg') }}" alt="BARBER&CO">

        <div class="info">
            <h2>BARBER&CO</h2>
            <p>⭐ 4.8 (150 avis)</p>
            <p>📍 Marcory Biétry</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Coupe homme, barbe, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- SALON 6 -->
    <div class="salon-card">
        <img src="{{ asset('image/C23.jpg') }}" alt="BARBERARIA DOZE">

        <div class="info">
            <h2>BARBERARIA DOZE</h2>
            <p>⭐ 4.8 (120 avis)</p>
            <p>📍 Marcory Anoumabo</p>

            <button class="toggle-btn" onclick="toggleInfo(this)">
                Plus d'informations
            </button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Coupe homme, barbe, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>

            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

</div>

<!-- SCRIPT -->
<script>
    function toggleInfo(btn) {
        let details = btn.nextElementSibling;

        details.style.display =
            details.style.display === "block" ? "none" : "block";
    }
</script>

@endsection