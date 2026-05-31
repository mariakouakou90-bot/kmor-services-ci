@extends('layouts.app')

@section('content')

<!-- MENU -->
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

<!-- SECTION PRINCIPALE -->
<section class="slogan">

    <h1>
        Vous avez besoin d'aide ?? <br>
        KMOR SERVICES CI est là pour vous !!
    </h1>

    <div class="conteneur">
        <input type="text" id="recherche" placeholder="Que cherchez-vous ?">
        <button onclick="rechercherPage()">Rechercher</button>
    </div>

    <div class="infos">
        <p>💬 Assistante</p>
        <p>🔒 Service sécurisé</p>
        <p>⏰ Disponible 24h/24 7j/7</p>
    </div>

</section>

<!-- TEXTE -->
<div class="mots">
    <h2>
        Vous avez besoin d'aide ? Laissez KMOR SERVICES CI vous donner un coup de main.
    </h2>
</div>

<!-- SERVICES -->
<div class="services">

    <a href="/beaute">
        <div class="card">
            <img src="{{ asset('image/beauté.jpeg') }}" alt="">
            <h3>Beauté</h3>
            <p>Votre maintenance beauté : on s'en occupe.</p>
            <hr>
            <ul>
                <li>Coiffure</li>
                <li>Maquillage</li>
                <li>Soins visage</li>
            </ul>
        </div>
    </a>

    <a href="/maison">
        <div class="card">
            <img src="{{ asset('image/maison.jpg') }}" alt="">
            <h3>Maison</h3>
            <p>Contactez KMOR SERVICES CI pour vos petits travaux.</p>
            <hr>
            <ul>
                <li>Plomberie</li>
                <li>Laverie</li>
            </ul>
        </div>
    </a>

    <a href="/creche">
        <div class="card">
            <img src="{{ asset('image/creche.jpeg') }}" alt="">
            <h3>Crèche</h3>
            <p>Un endroit sécurisé pour vos enfants.</p>
            <hr>
            <ul>
                <li>Garde d’enfants</li>
                <li>Assistante maternelle</li>
                <li>Éveil enfants</li>
            </ul>
        </div>
    </a>

</div>

<!-- COMMENT CA MARCHE -->
<div class="how-it-works">

    <h2>Comment ça marche ?</h2>

    <div class="steps">

        <div class="step">
            <img src="{{ asset('image/P1.png') }}" alt="">
            <h3>1. Rechercher</h3>
            <p>Trouvez le service dont vous avez besoin.</p>
        </div>

        <div class="step">
            <img src="{{ asset('image/P2.png') }}" alt="">
            <h3>2. Choisir</h3>
            <p>Sélectionnez un prestataire fiable.</p>
        </div>

        <div class="step">
            <img src="{{ asset('image/P3.png') }}" alt="">
            <h3>3. Profiter</h3>
            <p>Recevez votre service en toute sécurité.</p>
        </div>

    </div>

</div>

<!-- FOOTER -->
<footer class="footer">

    <div class="footer-container">

        <div class="footer-col">
            <h2>KMOR SERVICES CI</h2>
            <p>Votre plateforme de services à domicile : beauté, maison et crèche.</p>
        </div>

        <div class="footer-col">
            <h3>Liens utiles</h3>

            <ul>
                <li><a href="/">Accueil</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="/connexion">Connexion</a></li>
                <li><a href="/inscription">Inscription</a></li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Nos services</h3>

            <ul>
                <li>Beauté</li>
                <li>Maison</li>
                <li>Crèche</li>
            </ul>
        </div>

        <div class="footer-col">
            <h3>Contact</h3>
            <p>Email : contact@kmor.ci</p>
            <p>Téléphone : +225 0710901348</p>
        </div>

    </div>

    <div class="footer-bottom">
        <p>© 2026 KMOR SERVICES CI - Tous droits réservés</p>
    </div>

</footer>

<script>
function rechercherPage() {

    let mot = document.getElementById("recherche").value.toLowerCase();

    if (mot.includes("coiff") || mot.includes("beaute")) {
        window.location.href = "/beaute";
    }

    else if (mot.includes("plomb") || mot.includes("maison")) {
        window.location.href = "/maison";
    }

    else if (mot.includes("laverie")) {
        window.location.href = "/maison";
    }

    else if (mot.includes("creche") || mot.includes("creche")) {
        window.location.href = "/creche";
    }

    else {
        alert("Service non trouvé");
    }
}
</script>

@endsection