<?php

namespace App\Http\Controllers;

use App\Ouvrage;
use Illuminate\Http\Request;

class PanierController extends Controller
{
    public function panier()
    {
        // $ouvrages = [];
        // foreach (session()->get('panier')[0] as $id => $qtt) {
        //     \array_push(
        //         $ouvrages,
        //         Ouvrage::find($id)
        //     );
        // }

        return view('FrontOffice.Panier', [
            "ouvrages" => session()->get('panier')[0]
        ]);
    }

    public function ajout_panier($id_produit, $quantite)
    {
        // cibler la 1ére case de l'objet contenant le panier
        $panier = session("panier");
        $panier[0][$id_produit]["detail"] = Ouvrage::find($id_produit);
        $panier[0][$id_produit]["qtt"] = $quantite;
        session()->put("panier", $panier);
        return "success";
    }

    public function supprimer_panier($id_produit)
    {
        $panier = session("panier");
        unset($panier[0][$id_produit]);
        session()->put("panier", $panier);
        return "success";
    }
}
