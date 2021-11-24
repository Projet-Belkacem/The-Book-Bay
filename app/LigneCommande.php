<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $ouvrage_id
 * @property integer $user_id
 * @property integer $commande_id
 * @property int $quantite
 * @property float $montant
 * @property string $date_ajout_panier
 * @property Commande $commande
 * @property Ouvrage $ouvrage
 * @property User $user
 */
class LigneCommande extends Model
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
    protected $fillable = ['ouvrage_id', 'user_id', 'commande_id', 'quantite', 'montant', 'date_ajout_panier'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function commande()
    {
        return $this->belongsTo('App\Commande');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ouvrage()
    {
        return $this->belongsTo('App\Ouvrage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
