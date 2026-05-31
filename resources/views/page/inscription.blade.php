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


<link rel="stylesheet" href="{{ asset('css/inscription.css') }}">


<div class="fond-page">

    <div class="register-container">

        <div class="register-box">

            <h1>Inscription Prestataire</h1>

            @if(session('error'))
             <p style="color:red;">{{ session('error') }}</p>
            @endif

            @if(session('success'))
             <p style="color:green;">{{ session('success') }}</p>
            @endif

            <form action="/inscription" method="post">
                 @csrf

                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="text" name="prenom" placeholder="Prénom" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="numero" placeholder="Téléphone" required>
                    <input type="number" name="quartier" placeholder="ID Quartier" required>

                <select name="type" required>
                  <option value="">Choisir</option>
                  <option value="client">Client</option>
                  <option value="prestataire">Prestataire</option>
                </select>

                <button type="submit">S'inscrire</button>

            </form>

        </div>

    </div>

</div>

@endsection