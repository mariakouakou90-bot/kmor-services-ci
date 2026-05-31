@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/plomberie.css') }}">

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
<div class="hero">

    <img src="{{ asset('image/Plomberie1.jpg') }}" alt="plomberie">

    <div class="overlay">
        <div class="box">
            <h1>Plomberie</h1>
            <hr>

            <p>
                Une fuite ? Un problème de tuyauterie ?
                Contactez nos experts pour un service rapide et efficace.
            </p>

            <a href="/plomberie/services" class="btn">Réserver</a>
        </div>
    </div>

</div>

<!-- TEXTE + IMAGE -->
<div class="section-plomberie">

    <div class="texte">
        <h2>Besoin d’un plombier fiable ?</h2>

        <p>
            Une fuite, canalisation bouchée ou installation défectueuse ?
        </p>

        <p>
            KMOR SERVICES CI vous aide à trouver un professionnel qualifié.
        </p>

        <p>
            Simple, rapide et sécurisé.
        </p>
    </div>

    <div class="image">
        <img src="{{ asset('image/Plomberie1.jpg') }}" alt="plomberie">
    </div>

</div>

<!-- COMMENT CA MARCHE -->
<div class="comment-section">

    <h2>Comment ça marche ?</h2>

    <div class="steps">

        <div class="step">
            <img src="{{ asset('image/P1.png') }}">
            <h3>1. Décrivez votre besoin</h3>
            <p>Choisissez une date.</p>
        </div>

        <div class="step">
            <img src="{{ asset('image/P2.png') }}">
            <h3>2. Choisissez un prestataire</h3>
            <p>Comparez les profils.</p>
        </div>

        <div class="step">
            <img src="{{ asset('image/P3.png') }}">
            <h3>3. Service réalisé</h3>
            <p>Intervention à domicile.</p>
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