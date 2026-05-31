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


<link rel="stylesheet" href="{{ asset('css/reservation.css') }}">

<div class="form-container">

    <h1>Réservation</h1>

    @if(session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <form action="/reservation" method="post">
        @csrf

        <input type="text" name="nom" placeholder="Votre nom" required>

        <input type="text" name="numero" placeholder="Téléphone" required>

        <input type="text" name="service" placeholder="Service demandé" required>

        <input type="date" name="date" required>

        <input type="text" name="statut" value="en attente" readonly>

        <textarea name="description" placeholder="Décrivez votre besoin"></textarea>

        <button type="submit">Envoyer</button>
    </form>

</div>

@endsection