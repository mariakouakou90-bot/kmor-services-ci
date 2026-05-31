@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/creche.css') }}">

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


<!-- SECTION CRECHE -->
<div class="section-creche">

    <div class="container">

        <!-- IMAGE -->
        <div class="left">
            <div class="circle-container">

                <div class="circle-slider">
                    <img src="{{ asset('image/c2.jpg') }}">
                    <img src="{{ asset('image/c3.jpg') }}">
                    <img src="{{ asset('image/c4.jpg') }}">
                </div>

                <a href="/creche/services" class="btn-reserver">Réserver</a>


            </div>
        </div>

        <!-- TEXTE -->
        <div class="right">

            <div class="text-box">

                <h1>Trouvez une garde fiable pour vos enfants</h1>

                <p>
                    KMOR SERVICES CI vous met en relation avec des professionnels qualifiés
                    pour prendre soin de vos enfants en toute sécurité.
                </p>

                <div class="infos">

                    <div class="info-box">
                        <h3>🔒 Sécurité</h3>
                        <p>Prestataires vérifiés.</p>
                    </div>

                    <div class="info-box">
                        <h3>⭐ Confiance</h3>
                        <p>Des avis clients pour vous aider.</p>
                    </div>

                </div>

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