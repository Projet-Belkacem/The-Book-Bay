<?php

namespace App\Http\Controllers;

use App\Ouvrage;
use App\Theme;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function __construct()
    {
    }

    public function liste_des_ouvrages()
    {
        return view('FrontOffice.ListeProduits', [
            "ouvrages" => Ouvrage::all(),
            "themes" => Theme::all(),
            "max_prix" => Ouvrage::max("prix") ?? 100
        ]);
    }
}
