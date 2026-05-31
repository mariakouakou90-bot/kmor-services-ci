@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/cocody.css') }}">

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


<div class="salon">


<!-- Carte 1 -->
<div class="salon-card">
    <img src="{{ asset('image/C2 (2).jpg') }}">
    <div class="info">
        <h2>EGOS&SALON</h2>
        <p>📍 Cocody Riviera Palmeraie</p>
        <p>⭐ 4.8 (120 avis)</p>

        <a href="/reservation" class="btn">Réserver</a>
        
         <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Salon moderne spécialisé en tresses, brushing, coloration et soins capillaires.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>
    </div>
</div>

<!-- Carte 2 -->
<div class="salon-card">
    <img src="{{ asset('image/C1 (2).jpg') }}">
    <div class="info">
        <h2>GLAM' COIFFURE</h2>
        <p>📍 Cocody Angré 8e Tranche</p>
        <p>⭐ 4.8 (120 avis)</p>

        <a href="/reservation" class="btn">Réserver</a>

          <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>
           

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Tresses, brushing, coloration et soins capillaires.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>
    </div>
</div>

<!-- Carte 3 -->
<div class="salon-card">
    <img src="{{ asset('image/C3 (2).jpg') }}">
    <div class="info">
          <h2>BARBER SHOP</h2>
          <p>📍 Deux-Plateaux Vallons</p>
          <p>⭐ 4.0 (120 avis)</p>

          <a href="/reservation" class="btn">Réserver</a>

           <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Coupe moderne, rasage, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 19h</p>
            </div>
    </div> 

</div>

<!-- Carte 4 -->
<div class="salon-card">
    <img src="{{ asset('image/C4 (2).jpg') }}">
    <div class="info">
        <h2>L'HOMME BY BARBER</h2>
        <p>📍 Riviera Bonoumin</p>
        <p>⭐ 4.0 (120 avis)</p>
        <a href="/reservation" class="btn">Réserver</a>

         <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Coupe homme, barbe, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>
    </div>
</div>

<!-- Carte 5 -->
<div class="salon-card">
    <img src="{{ asset('image/C6.jpg') }}">
    <div class="info">
        <h2>COIFFURE ESTHÉTIQUE</h2>
        <p>📍 Riviera Golf</p>
        <p>⭐ 4.0 (100 avis)</p>

        <a href="/reservation" class="btn">Réserver</a>

         <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

        <div class="details">
            <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
            <p>Coiffure femme, homme et enfants.</p>
            <p>Ouvert : Lun - Sam / 8h à 19h</p>
        </div>
    </div>
</div>

<!-- Carte 6 -->
<div class="salon-card">
    <img src="{{ asset('image/C5.jpg') }}">
    <div class="info">
        <h2>FAMILY HAIR STYLE</h2>
        <p>📍 Deux-Plateaux Vallons</p>
        <p>⭐ 4.2 (120 avis)</p>

        <a href="/reservation" class="btn">Réserver</a>

         <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

        <div class="details">
            <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
            <p>Salon mixte : femme, homme, enfants.</p>
            <p>Ouvert : Lun - Sam / 8h à 19h</p>
        </div>
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