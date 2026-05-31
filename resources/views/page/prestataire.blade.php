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
        <li><a href="/avis">Avis</a></li>
        <li><a href="/admin">Admin</a></li>
    </ul>
</nav>

<!-- CSS -->
<link rel="stylesheet" href="{{ asset('css/prestataire.css') }}">

<!-- CONTENU -->
<div class="container">

    <h1>Espace Prestataire</h1>

    @if(session('success'))
        <p class="success">{{ session('success') }}</p>
    @endif

    <!-- FORMULAIRE AJOUT -->
    <div class="box">
        <h2>Ajouter une prestation</h2>

        <form action="/prestataire" method="POST">
            @csrf

            <input 
                type="text" 
                name="description" 
                placeholder="Description" 
                required
            >

            <input 
                type="number" 
                name="tarif" 
                placeholder="Tarif" 
                required
            >

            <select name="id_service" required>
                <option value="">Choisir service</option>
                <option value="1">Coiffure</option>
                <option value="2">Plomberie</option>
                <option value="3">Laverie</option>
                <option value="4">Crèche</option>
            </select>

            <button type="submit">Ajouter</button>
        </form>
    </div>

    <!-- MES PRESTATIONS -->
    <h2>Mes prestations</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Description</th>
            <th>Tarif</th>
            <th>Service</th>
        </tr>

        @foreach($prestations as $p)
            <tr>
                <td>{{ $p->id_prestation }}</td>
                <td>{{ $p->description_prestation }}</td>
                <td>{{ $p->prix_prestation }}</td>
                <td>{{ $p->id_service }}</td>
            </tr>
        @endforeach
    </table>

    <!-- DEMANDES RECUES -->
    <h2>Demandes reçues</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Montant</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>

        @foreach($commandes as $c)
            <tr>
                <td>{{ $c->id_commande }}</td>
                <td>{{ $c->date_commande }}</td>
                <td>{{ $c->montant_total }}</td>
                <td>{{ $c->statut }}</td>

                <td>
                    @if($c->statut == 'en attente')

                        <form action="/commande/accepter/{{ $c->id_commande }}" method="POST">
                            @csrf
                            <button type="submit">Accepter</button>
                        </form>

                    @elseif($c->statut == 'acceptée')

                        <form action="/commande/terminer/{{ $c->id_commande }}" method="POST">
                            @csrf
                            <button type="submit">Terminer</button>
                        </form>

                    @else

                        <span style="color:green; font-weight:bold;">
                            ✔ Terminé
                        </span>

                    @endif
                </td>
            </tr>
        @endforeach
    </table>

</div>

@endsection