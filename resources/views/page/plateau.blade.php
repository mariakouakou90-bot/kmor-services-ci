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


<link rel="stylesheet" href="{{ asset('css/plateau.css') }}">


<!-- Carte 1 -->
<div class="salon-card">
    <img src="{{ asset('image/C7.jpg') }}" alt="salon">

    <div class="info">
        <h2>LOLA HAIR STUDIO</h2>
        <p>📍 Plateau Avenue Chardy</p>
        <p>⭐ 4.8 (120 avis)</p>

        <button class="toggle-btn" onclick="toggleInfo(this)">
            Plus d'informations
        </button>

        <div class="details">
            <p>Brushing, tresses, coloration.</p>
            <p>Ouvert : Lun - Sam / 8h à 20h</p>
        </div>

        <a href="/reservation" class="btn">Réserver</a>
    </div>
</div>
 
    <!-- Carte 2 -->
    <div class="salon-card">
        <img src="{{ asset('image/C8.jpg') }}" alt="salon">

        <div class="info">
            <h2>CHARLES</h2>
            <p>📍 Plateau Rue du Commerce</p>
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
        <img src="{{ asset('image/C10.jpg') }}" alt="salon">

        <div class="info">
            <h2>PRIME BARBER</h2>
            <p>📍 Plateau Immeuble Postal</p>
            <p>⭐ 4.0 (120 avis)</p>

         <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Coupe homme, barbe, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>


            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 4 -->
    <div class="salon-card">
        <img src="{{ asset('image/C9.jpg') }}" alt="salon">

        <div class="info">
            <h2>BARBER SHOP</h2>
            <p>📍 Plateau Avenue Lamblin</p>
            <p>⭐ 4.0 (120 avis)</p>

           <button class="toggle-btn" onclick="toggleInfo(this)">Plus d'informations</button>

            <div class="details">
                <p><strong>Avis clients :</strong> ⭐⭐⭐⭐⭐</p>
                <p>Coupe homme, barbe, styling.</p>
                <p>Ouvert : Lun - Sam / 8h à 20h</p>
            </div>


            <a href="/reservation" class="btn">Réserver</a>
        </div>
    </div>

    <!-- Carte 5 -->
    <div class="salon-card">
        <img src="{{ asset('image/C11.jpg') }}" alt="salon">

        <div class="info">
            <h2>FE'TIFS</h2>
            <p>📍 Plateau Centre Ville</p>
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
        <img src="{{ asset('image/C12.jpg') }}" alt="salon">

        <div class="info">
            <h2>COIFFIRST</h2>
            <p>📍 Plateau Rue Paris Village</p>
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