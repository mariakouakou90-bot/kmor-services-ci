@extends('layouts.app')

@section('content')

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
        <li><a href="/admin">Admin</a></li>
    </ul>
</nav>

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/avis.css') }}">

<!-- CONTENU -->
<div class="container">
    
    <h1>Laisser un avis</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <form action="/avis" method="POST">
        @csrf

        <!-- NOTE -->
        <select name="note" required>
            <option value="">Choisir note</option>
            <option value="1">⭐☆☆☆☆</option>
            <option value="2">⭐⭐☆☆☆</option>
            <option value="3">⭐⭐⭐☆☆</option>
            <option value="4">⭐⭐⭐⭐☆</option>
            <option value="5">⭐⭐⭐⭐⭐</option>
        </select>

        <!-- COMMENTAIRE -->
        <textarea name="commentaire" placeholder="Votre commentaire" required></textarea>

        <!-- BOUTON -->
        <button type="submit">Envoyer</button>
    </form>

</div>

@endsection