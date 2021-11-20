<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier()
    {
        return view('FrontOffice.Panier');
    }

    public function ajout_panier($id_produit, $quantite)
    {
        // cibler la 1ére case de l'objet contenant le panier
        $panier = session("panier");
        $panier[0][$id_produit] = $quantite;
        session()->put("panier", $panier);
    }

    public function creer_panier()
    {
        session()->flush();
        session()->push("panier", []);
        echo "panier regénéré avec succès";
    }
}
