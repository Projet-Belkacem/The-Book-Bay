<?php

namespace App\Http\Controllers;

use App\Ouvrage;
use App\Services\FileUploader;
use App\Theme;
use Illuminate\Http\Request;

class GestionOuvragesController extends Controller
{
    private $fileUploader;
    private $path = "uploads/images/ouvrages/";
    public function __construct(FileUploader $fileUploader)
    {
        $this->fileUploader = $fileUploader;
    }

    public function index()
    {
        return view("BackOffice.GestionOuvrages", [
            "ouvrages" => Ouvrage::all(),
            "themes" => Theme::all()
        ]);
    }

    public function ajouter_ouvrage(Request $request)
    {
        $request->validate([
            'titre'  => 'required',
            'prix'   => 'required',
            'auteur'  => 'required',
            'theme_id'  => 'required',
            'quantite_actuelle'  => 'required',
            'description'   => 'required',
            'chemin_photo_couverture' => 'required|image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $form_data = $request->except("_token");
        $form_data['chemin_photo_couverture'] = $this->fileUploader->Upload(
            $this->path,
            "ouvrage_created_" . date('Y_m_d_H_i_s'),
            $request->file('chemin_photo_couverture')
        );

        $id =  Ouvrage::insertGetId($form_data);

        return redirect()->route("gestion_ouvrages")
            ->with('success', "Nouvel ouvrage ajouté avec succès : #OUV$id");
    }

    public function modifier_ouvrage(Request $request, Ouvrage $ouvrage)
    {
        $request->validate([
            'titre'  => 'required',
            'prix'   => 'required',
            'auteur'  => 'required',
            'theme_id'  => 'required',
            'quantite_actuelle'  => 'required',
            'description'   => 'required',
            'chemin_photo_couverture' => 'image|mimes:jpeg,png,jpg,svg|max:2048'
        ]);

        $form_data = $request->all();
        $form_data['chemin_photo_couverture'] = $request->file('chemin_photo_couverture') ?
            $this->fileUploader->Upload($this->path, "ouvrage_$ouvrage->id" . "_image_" . date('Y_m_d_H_i_s'), $request->file('chemin_photo_couverture')) :
            $ouvrage->chemin_photo_couverture;

        $ouvrage->update($form_data);

        return redirect()->route("gestion_ouvrages")
            ->with('success', "#OUV$ouvrage->id Modifié avec succès !");
    }

    public function supprimer_ouvrage(Ouvrage $ouvrage)
    {
        $ouvrage->delete();
        return redirect()->route("gestion_ouvrages")
            ->with('success', "#OUV$ouvrage->id Supprimé avec succès !");
    }
}
