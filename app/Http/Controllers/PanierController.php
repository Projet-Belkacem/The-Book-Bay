<?php

namespace App\Http\Controllers;

use App\LigneCommande;
use App\Ouvrage;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PanierController extends Controller
{
    public function panier()
    {
        return view('FrontOffice.Panier', [
            "ouvrages" => Auth::check() ?
                Auth::user()->getCurrentPanier() :
                session()->get('panier')[0]
        ]);
    }

    public function paiement()
    {
        return view('FrontOffice.Paiement', [
            "produits" => Auth::user()->getValidatedPanier()
        ]);
    }

    public function ajout_panier($id_produit, $quantite)
    {
        if (Auth::check()) {
            LigneCommande::create([
                "ouvrage_id" => $id_produit,
                "user_id" => auth()->id(),
                "date_ajout_panier" => Carbon::now(),
                "quantite" => $quantite,
                "montant" => $quantite * Ouvrage::find($id_produit)->prix,
                "commande_id" => Auth::user()->getCurrentCommande()
            ])->save();
        } else {
            // stocker l'objet contenant le "panier" existant dans la session dans une variable 
            // afin de mieu la manipuler puis y la remettre en session
            $panier = session("panier");
            // cibler la 1ére case de l'objet contenant le panier
            $panier[0][$id_produit]["detail"] = Ouvrage::find($id_produit);
            $panier[0][$id_produit]["qtt"] = $quantite;
            session()->put("panier", $panier);
        }

        return "ajouté avec succès";
    }

    public function supprimer_panier($id_produit)
    {
        if (Auth::check()) {
            LigneCommande::find(request()->get('ligne'))->delete();
        } else {
            $panier = session("panier");
            unset($panier[0][$id_produit]);
            session()->put("panier", $panier);
        }

        return "supprimé avec succès";
    }

    public function valider_commande_panier()
    {
        if (Auth::check()) {
            DB::table('ligne_commandes')
                ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
                ->join("ouvrages", "ligne_commandes.ouvrage_id", "=", "ouvrages.id")
                ->where("commandes.etat", "=", "EN_ATTENTE")
                ->where("ligne_commandes.user_id", "=", auth()->id())
                ->update(["commandes.etat" => "EN_COURS"]);
            return \redirect()->route("mon_paiement");
        } else {
            dd("Erreur fatale : Authentification");
        }
    }

    public static function transfert_panier_session_BD()
    {
        $panier = session("panier");
        $id_commande = Auth::user()->getCurrentCommande();
        foreach ($panier[0] as $id_produit => $obj) {
            LigneCommande::create([
                "ouvrage_id" => $id_produit,
                "user_id" => auth()->id(),
                "date_ajout_panier" => Carbon::now(),
                "quantite" => $obj["qtt"],
                "montant" => $obj["qtt"] * $obj["detail"]->prix,
                "commande_id" => $id_commande
            ])->save();
        }
        session()->forget("panier");
    }
}
