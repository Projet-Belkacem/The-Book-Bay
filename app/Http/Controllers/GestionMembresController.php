<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GestionMembresController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        return view("BackOffice.GestionMembres", [
            "membres" => User::all()
        ]);
    }

    public function ajouter_membre(Request $request)
    {
        $request->validate(
            [
                'nom' => ['required', 'string', 'max:255'],
                'prenom' => ['required', 'string', 'max:255'],
                'date_naissance' => ['required', 'date'],
                'adresse' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:20'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:6'],
            ]
        );

        $id = User::insertGetId([
            'nom' => $request->nom,
            'prenom' =>  $request->prenom,
            'email' =>  $request->email,
            'adresse' =>  $request->adresse,
            'date_naissance' => $request->date_naissance,
            'is_admin' => $request->is_admin == "ADMIN",
            'password' => Hash::make($request->password),
            'phone' =>  $request->phone,
        ]);

        return redirect()
            ->route("gestion_membres")
            ->with("success", "Nouveau membre ajouté avec succès #MM$id");
    }
}
