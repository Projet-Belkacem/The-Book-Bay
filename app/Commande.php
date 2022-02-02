<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $etat
 * @property string $date_debut_commande
 * @property string $date_fin_commande
 * @property LigneCommande[] $ligneCommandes
 * @property Livraison[] $livraisons
 */
class Commande extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['etat', 'date_debut_commande', 'date_fin_commande'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function livraisons()
    {
        return $this->hasMany('App\Livraison');
    }
}
