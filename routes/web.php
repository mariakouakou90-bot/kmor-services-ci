<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});



//acceuil
Route::get('/', function () {
    return view('page.accueil');
});

Route::get('/', function () {
    return view('page.accueil');
});

Route::get('/beaute', function () {
    return view('page.beaute');
});

Route::get('/maison', function () {
    return view('page.maison');
});

Route::get('/creche', function () {
    return view('page.creche');
});

Route::get('/', function () {
    return view('page.accueil');
});


//beaute
Route::get('/beaute', function () {
    return view('page.beaute');
});
//maion
Route::get('/maison', function () {
    return view('page.maison');
});
//creche
Route::get('/creche', function () {
    return view('page.creche');
});


//beaute different services
Route::get('/coiffeur/cocody', function () {
    return view('page.cocody');
});

Route::get('/coiffeur/plateau', function () {
    return view('page.plateau');
});

Route::get('/coiffeur/yopougon', function () {
    return view('page.yopougon');
});

Route::get('/coiffeur/koumassi', function () {
    return view('page.koumassi');
});

Route::get('/coiffeur/marcory', function () {
    return view('page.marcory');
});




//maison
Route::get('/maison', function () {
    return view('page.maison');
});

//plomberie services
Route::get('/plomberie', function () {
    return view('page.plomberie');
});

Route::get('/plomberie/services', function () {
    return view('page.plomberie-services');
});


//laverie services
Route::get('/laverie', function () {
    return view('page.laverie');
});

Route::get('/laverie/services', function () {
    return view('page.laverie-services');
});


//creche services
Route::get('/creche', function () {
    return view('page.creche');
});

Route::get('/creche/services', function () {
    return view('page.creche-services');
});




//connexion
Route::get('/connexion', function () {
    return view('page.connexion');
});

Route::post('/connexion', function () {
    $email = request('email');
    $numero = request('numero');

    $user = DB::table('utilisateur')
        ->where('email_utilisateur', $email)
        ->where('num_utilisateur', $numero)
        ->first();

    if ($user) {
        return redirect('/')->with('success', 'Bienvenue chez KMOR');
    }

    return back()->with('error', 'Email ou numéro incorrect');
});




//inscription
Route::get('/inscription', function () {
    return view('page.inscription');
});

Route::post('/inscription', function (Request $request) {

    $nom = $request->nom;
    $prenom = $request->prenom;
    $email = $request->email;
    $numero = $request->numero;
    $quartier = $request->quartier;
    $type = $request->type;

    $client = 0;
    $prestataire = 0;

    if($type == "client"){
        $client = 1;
    } else {
        $prestataire = 1;
    }

    
    $existe = DB::table('utilisateur')
        ->where('email_utilisateur', $email)
        ->first();

    if($existe){
        return back()->with('error', 'Cet email existe déjà');
    }

    DB::table('utilisateur')->insert([
        'email_utilisateur' => $email,
        'est_prestataire' => $prestataire,
        'est_client' => $client,
        'datecrea_utilisateur' => now(),
        'nom_utilisateur' => $nom,
        'prenom_utilisateur' => $prenom,
        'num_utilisateur' => $numero,
        'id_quartier' => $quartier
    ]);

    return redirect('/connexion')->with('success', 'Inscription réussie');
});


//reservatin formulaire
Route::get('/reservation', function () {
    return view('page.reservation');
});

Route::post('/reservation', function (Request $request) {
    DB::table('commande')->insert([
        'date_commande' => $request->date,
        'montant_total' => 0,
        'statut' => 'en attente',
        'id_quartier' => 1,
        'id_utilisateur' => 1
    ]);

    return back()->with('success', 'Réservation enregistrée');
});

//prestataire
Route::get('/prestataire', function () {

    $prestations = DB::table('prestation')
        ->orderBy('id_prestation', 'desc')
        ->get();

    $commandes = DB::table('commande')
        ->orderBy('id_commande', 'desc')
        ->get();

    return view('page.prestataire', compact('prestations', 'commandes'));
});

Route::post('/prestataire', function () {

    DB::table('prestation')->insert([
         'description_prestation' => request('description'),
         'prix_prestation' => request('tarif'),
         'datecrea_prestation' => now(),
        'id_service' => request('id_service'),
        'id_utilisateur' => 1
    ]);

    return back()->with('success', 'Prestation ajoutée');
});


Route::post('/commande/accepter/{id}', function ($id) {
    DB::table('commande')
        ->where('id_commande', $id)
        ->update(['statut' => 'acceptée']);

    return back();
});

Route::post('/commande/terminer/{id}', function ($id) {
    DB::table('commande')
        ->where('id_commande', $id)
        ->update(['statut' => 'terminée']);

    return back();
});


//admin
Route::get('/admin', function () {

    $users = DB::table('utilisateur')
        ->orderBy('id_utilisateur', 'desc')
        ->get();

    $avis = DB::table('avis')
        ->orderBy('id_avis', 'desc')
        ->get();

    return view('page.admin', compact('users','avis'));
});

Route::post('/admin/supprimer/{id}', function($id){
    DB::table('utilisateur')
        ->where('id_utilisateur', $id)
        ->delete();

    return back();
});




// Page avis
Route::get('/avis', function () {

    $avis = DB::table('avis')
            ->orderBy('id_avis', 'desc')
            ->get();

    return view('page.avis', compact('avis'));
});

// Enregistrer un avis
Route::post('/avis', function (Request $request) {

    DB::table('avis')->insert([
        'nom' => 'Client',
        'note' => $request->note,
        'commentaire' => $request->commentaire,
        'date_avis' => now()
    ]);

    return back()->with('success', 'Avis envoyé avec succès');
});