<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commande_id
 * @property string $prenom
 * @property string $nom
 * @property string $ville
 * @property string $adresse
 * @property string $telephone
 * @property string $email
 * @property string $remarques
 * @property string $num_carte
 * @property string $expiration_carte
 * @property string $cvv_carte
 * @property int $code_postal
 * @property Commande $commande
 */
class Livraison extends Model
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
    protected $fillable = ['commande_id', 'prenom', 'nom', 'ville', 'adresse', 'telephone', 'email', 'remarques', 'num_carte', 'expiration_carte', 'cvv_carte', 'code_postal'];

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
}
