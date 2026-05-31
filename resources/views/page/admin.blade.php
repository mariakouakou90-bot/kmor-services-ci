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



<link rel="stylesheet" href="{{ asset('css/admin.css') }}">

<div class="container">

<h1>Espace Admin</h1>

<table>
<tr>
    <th>ID</th>
    <th>Nom</th>
    <th>Email</th>
    <th>Type</th>
    <th>Validé</th>
    <th>Action</th>
</tr>

@foreach($users as $u)
<tr>
    <td>{{ $u->id_utilisateur }}</td>
    <td>{{ $u->nom_utilisateur }}</td>
    <td>{{ $u->email_utilisateur }}</td>
    

    <td>
        @if($u->est_prestataire == 1)
            Prestataire
        @else
            Client
        @endif
    </td>

    <td>
        @if(isset($u->valide) && $u->valide == 1)
            ✔ Oui
        @else
            Non
        @endif
    </td>
   <td>
    <form action="/admin/supprimer/{{ $u->id_utilisateur }}" method="POST">
     @csrf
      <button class="btn-delete">Supprimer</button>
    </form>
   </td>

</tr>
@endforeach
</table>

<h2>Liste des avis</h2>

<table>
<tr>
<th>ID</th>
<th>Note</th>
<th>Commentaire</th>
<th>Date</th>
</tr>

@foreach($avis as $a)
<tr>
<td>{{ $a->id_avis }}</td>
<td>⭐ {{ $a->note }}/5</td>
<td>{{ $a->commentaire }}</td>
<td>{{ $a->date_avis }}</td>
</tr>
@endforeach
</table>
</div>

@endsection