@extends('layouts.app')

@section('content')

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

<link rel="stylesheet" href="{{ asset('css/beaute.css') }}">

<div class="hero-recherche">
    <h1>Réserver en ligne un RDV avec un coiffeur</h1>

    <div class="barre-recherche">
        <input type="text" id="service" placeholder="Que cherchez-vous ?">
        
        <select id="ville">
           <option value="cocody">Cocody</option>
           <option value="plateau">Plateau</option>
          <option value="yopougon">Yopougon</option>
          <option value="koumassi">Koumassi</option>
          <option value="marcory">Marcory</option>
        </select>

        <button onclick="rechercherCoiffure()">Rechercher</button>
    </div>
</div>

<div class="villes">

   <a href="/coiffeur/cocody" class="ville">
     <img src="{{ asset('image/cocody.jpg') }}">
        <p>Découvrez nos</p>
        <h3>Coiffeurs à Cocody</h3>
   </a>

    <a href="/coiffeur/plateau" class="ville" >
         <img src="{{ asset('image/Abidjan Plateau.jpg') }}">
        <p>Découvrez nos</p>
        <h3>Coiffeurs au Plateau</h3>
    </a>

    <a href="/coiffeur/yopougon" class="ville">
         <img src="{{ asset('image/yopougon.jpg') }}">
        <p>Découvrez nos</p>
        <h3>Coiffeurs à Yopougon</h3>
    </a>

    <a href="/coiffeur/koumassi" class="ville">
         <img src="{{ asset('image/Abidjan,Koumassi.jpg') }}">
        <p>Découvrez nos</p>
        <h3>Coiffeurs à Koumassi</h3>
    </a>

    <a href="/coiffeur/marcory" class="ville">
        <img src="{{ asset('image/Marcory Abidjan.jpg') }}">
        <p>Découvrez nos</p>
        <h3>Coiffeurs à Marcory</h3>
    </a>

</div>


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
function rechercherCoiffure() {

    let service = document.getElementById("service").value.toLowerCase().trim();
    let ville = document.getElementById("ville").value.toLowerCase().trim();

    if(service === "" && ville === ""){
        alert("Entrez un service ou choisissez une ville");
        return;
    }

    if(service.includes("coiff") || service === ""){

        if(ville === "cocody"){
            window.location.href = "/coiffeur/cocody";
        }
        else if(ville === "plateau"){
            window.location.href = "/coiffeur/plateau";
        }
        else if(ville === "yopougon"){
            window.location.href = "/coiffeur/yopougon";
        }
        else if(ville === "koumassi"){
            window.location.href = "/coiffeur/koumassi";
        }
        else if(ville === "marcory"){
            window.location.href = "/coiffeur/marcory";
        }
        else{
            alert("Choisissez une ville");
        }

    }else{
        alert("Service non disponible");
    }
}
</script>






@endsection