<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

/**
 * @property integer $id
 * @property string $nom
 * @property string $prenom
 * @property string $date_naissance
 * @property string $adresse
 * @property string $phone
 * @property string $email
 * @property string $password
 * @property boolean $is_admin
 * @property boolean $is_actif
 * @property string $remember_token
 * @property LigneCommande[] $ligneCommandes
 */
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'date_naissance', 'adresse', 'phone', 'email', 'password', 'is_admin', 'is_actif', 'remember_token'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ligneCommandes()
    {
        return $this->hasMany('App\LigneCommande');
    }

    public function getCurrentCommande()
    {
        $commande_en_attente_du_client =
            DB::table('ligne_commandes')
            ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
            ->select("commandes.id")
            ->where("commandes.etat", "=", "EN_ATTENTE")
            ->where("ligne_commandes.user_id", "=", auth()->id())
            ->get();

        return $commande_en_attente_du_client->count() != 0 ?
            $commande_en_attente_du_client->first()->id  :
            Commande::insertGetId([
                "etat" => "EN_ATTENTE",
                "date_debut_commande" => Carbon::now()
            ]);
    }

    public function getCurrentPanier()
    {
        return DB::table('ligne_commandes')
            ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
            ->join("ouvrages", "ligne_commandes.ouvrage_id", "=", "ouvrages.id")
            ->select("ouvrages.*", "ligne_commandes.quantite", "ligne_commandes.montant", "ligne_commandes.id as id_ligne_commande")
            ->where("commandes.etat", "=", "EN_ATTENTE")
            ->where("ligne_commandes.user_id", "=", auth()->id())
            ->get();
    }

    public function getValidatedPanier()
    {
        return DB::table('ligne_commandes')
            ->join("commandes", "ligne_commandes.commande_id", "=", "commandes.id")
            ->join("ouvrages", "ligne_commandes.ouvrage_id", "=", "ouvrages.id")
            ->select("ouvrages.*", "ligne_commandes.quantite", "ligne_commandes.montant", "ligne_commandes.id as id_ligne_commande", "commandes.id as id_commande")
            ->where("commandes.etat", "=", "EN_COURS")
            ->where("ligne_commandes.user_id", "=", auth()->id())
            ->get();
    }
}
