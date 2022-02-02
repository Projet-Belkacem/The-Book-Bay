<?php

namespace App\Http\Controllers;

use App\Commande;
use App\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GestionCommandesController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('BackOffice.GestionCommandes', [
            "commandes" =>  Commande::has('ligneCommandes')->get(),
            "contacts" => Contact::all()
        ]);
    }

    public function confirmation_commande(Commande $commande)
    {
        $commande->update([
            "etat" => "LIVRAISON",
            "date_fin_commande" => Carbon::now()
        ]);
        return redirect()
            ->route("gestion_commandes")
            ->with("success", "Commande #CMD-REF-CR$commande->id rectifiée, livrée avec succès.");
    }

    public function annulation_commande(Commande $commande)
    {
        $commande->update([
            "etat" => "ANNULATION",
            "date_fin_commande" => Carbon::now()
        ]);
        return redirect()
            ->route("gestion_commandes")
            ->with("success", "Commande #CMD-REF-CR$commande->id rectifiée, annulée avec succès.");
    }
}
