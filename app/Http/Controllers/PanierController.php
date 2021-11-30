<?php

namespace App\Http\Controllers;

use App\Ouvrage;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier()
    {
        return view('FrontOffice.Panier', [
            "ouvrages" => session()->get('panier')[0]
        ]);
    }

    public function ajout_panier($id_produit, $quantite)
    {
        // stocker l'objet contenant le "panier" existant dans la session dans une variable 
        // afin de mieu la manipuler puis y la remettre en session
        $panier = session("panier");
        // cibler la 1ére case de l'objet contenant le panier
        $panier[0][$id_produit]["detail"] = Ouvrage::find($id_produit);
        $panier[0][$id_produit]["qtt"] = $quantite;
        session()->put("panier", $panier);
        return "ajouté avec succès";
    }

    public function supprimer_panier($id_produit)
    {
        $panier = session("panier");
        unset($panier[0][$id_produit]);
        session()->put("panier", $panier);
        return "supprimé avec succès";
    }
}
