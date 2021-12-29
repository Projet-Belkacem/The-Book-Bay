<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Services\FileUploader;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    private $fileUploader;
    public function __construct(FileUploader $fileUploader)
    {
        $this->fileUploader = $fileUploader;
    }

    public function contactez_nous()
    {
        return view('FrontOffice.Contact');
    }

    public function post_contactez_nous(Request $request)
    {
        Contact::create([
            "nom" => $request->nom,
            "prenom" => $request->prenom,
            "email" => $request->email,
            "user_id" => $request->user,
            "sujet" => $request->sujet,
            "message" => $request->message,
            "bon_commande" =>  $request->file("bon_commande") != null ?
                $this->fileUploader->Upload(
                    "public/uploads/docs/bonsCommandes/",
                    "BC-USER-" . Auth::User()->id . "-Date-" . Carbon::now()->toDateString(),
                    $request->file("bon_commande")
                ) : ""
        ]);
        return \redirect()->route("contactez_nous");
    }
}
