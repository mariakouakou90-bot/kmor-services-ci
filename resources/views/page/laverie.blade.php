@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/laverie.css') }}">

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


<!-- HERO -->
<div class="lave">
    <h1>PROFESSIONNELS</h1>

    <p>
        Hôtels, restaurants, hôpitaux, instituts de beauté, spa...
        contactez-nous pour bénéficier d'offres promotionnelles.
    </p>
</div>

<!-- SECTION -->
<div class="section-maison">

    <div class="image-gauche">
        <img src="{{ asset('image/l1.jpg') }}" alt="laverie">
       <a href="/laverie/services" class="btn-reserver">Réserver</a>
    </div>

    <div class="contenu-droite">

        <span class="badge">Service rapide</span>

        <h1>Confiez-nous vos vêtements et détendez-vous !</h1>

        <div class="bloc-info">

            <div class="info">
                <img src="{{ asset('image/house.png') }}">
                <h3>Service de qualité</h3>
                <p>Nous prenons soin de vos vêtements avec professionnalisme.</p>
            </div>

            <div class="info">
                <img src="{{ asset('image/clean.png') }}">
                <h3>Respect de vos choix</h3>
                <p>Chaque demande est traitée selon vos préférences.</p>
            </div>

        </div>

    </div>

</div>

<!-- FOOTER -->
<footer class="footer">

    <div class="footer-container">

        <!-- Logo + description -->
        <div class="footer-col">
            <h2>KMOR SERVICES CI</h2>
            <p>Votre plateforme de services à domicile : beauté, maison et crèche. Simple, rapide et sécurisé.</p>
        </div>

        <!-- Liens -->
        <div class="footer-col">
            <h3>Liens utiles</h3>
            <ul>
                <li><a href="#">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Connexion</a></li>
                <li><a href="#">Inscription</a></li>
            </ul>
        </div>

        <!-- Services -->
        <div class="footer-col">
            <h3>Nos services</h3>
            <ul>
                <li>Beauté</li>
                <li>Maison</li>
                <li>Crèche</li>
            </ul>
        </div>

        <!-- Contact -->
        <div class="footer-col">
            <h3>Contact</h3>
            <p>Email : contact@kmor.ci</p>
            <p>Téléphone : +225 0710901348</p>
        </div>

    </div>

    <!-- Bas -->
    <div class="footer-bottom">
        <p>© 2026 KMOR SERVICES CI - Tous droits réservés</p>
    </div>
   

</footer>

@endsection