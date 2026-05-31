<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PrestataireController extends Controller
{
    public function index()
    {
        $prestataires = DB::table('utilisateur')
            ->where('est_prestataire', 1)
            ->get();

        return view('page.prestataire', compact('prestataires'));
    }

    public function valider($id)
    {
        DB::table('utilisateur')
            ->where('id_utilisateur', $id)
            ->update(['valide' => 1]);

        return back()->with('success', 'Prestataire validé');
    }
}
