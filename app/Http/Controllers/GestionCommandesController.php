<?php

namespace App\Http\Controllers;

use App\Commande;
use Illuminate\Http\Request;

class GestionCommandesController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view('BackOffice.GestionCommandes', [
            "commandes" =>  Commande::has('ligneCommandes')->get()
        ]);
    }
}
