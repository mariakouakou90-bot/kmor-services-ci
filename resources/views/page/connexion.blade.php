@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="{{ asset('css/connexion.css') }}">

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



<div class="fond-page">

    <div class="form-box">
        <h1>Connexion</h1>

        @if(session('error'))
          <p style="color:red;">{{ session('error') }}</p>
        @endif

        @if(session('success'))
          <p style="color:green;">{{ session('success') }}</p>
        @endif

     <form action="/connexion" method="post">
     @csrf

        <input type="email" name="email" placeholder="Votre email" required>

        <input type="text" name="numero" placeholder="Votre numéro" required>

        <button type="submit" name="connecter">Se connecter</button>

     </form>

    </div>

</div>

</div>