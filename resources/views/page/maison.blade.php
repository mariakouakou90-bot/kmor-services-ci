@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/maison.css') }}">

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


<!-- SLIDER -->
<div class="slider">
    <div class="slides" id="slides">

        <div class="slide">
            <img src="{{ asset('image/plomberie.jpg') }}">
            <a href="/plomberie" class="btn-choisir">Choisir</a>
        </div>

        <div class="slide">
            <img src="{{ asset('image/laverie.jpg') }}">
            <a href="/laverie" class="btn-choisir">Choisir</a>
        </div>

    </div>

    <button class="prev" onclick="prevSlide()">❮</button>
    <button class="next" onclick="nextSlide()">❯</button>
</div>

<!-- FOOTER -->
<footer class="footer">
    <div class="footer-container">

        <div class="footer-col">
            <h2>KMOR SERVICES CI</h2>
            <p>Votre plateforme de services à domicile.</p>
        </div>

        <div class="footer-col">
            <h3>Liens utiles</h3>
            <p>Accueil</p>
            <p>Connexion</p>
            <p>Inscription</p>
        </div>

        <div class="footer-col">
            <h3>Nos services</h3>
            <p>Beauté</p>
            <p>Maison</p>
            <p>Crèche</p>
        </div>

        <div class="footer-col">
            <h3>Contact</h3>
            <p>+225 0710901348</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 KMOR SERVICES CI</p>
    </div>
</footer>

<script>
let index = 0;

function showSlide() {
    const slides = document.getElementById("slides");
    slides.style.transform = "translateX(" + (-index * 100) + "%)";
}

function nextSlide() {
    const total = document.querySelectorAll(".slide").length;
    index = (index + 1) % total;
    showSlide();
}

function prevSlide() {
    const total = document.querySelectorAll(".slide").length;
    index = (index - 1 + total) % total;
    showSlide();
}

setInterval(nextSlide, 4000);
</script>

@endsection