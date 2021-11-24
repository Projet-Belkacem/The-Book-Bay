<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $commande_id
 * @property string $ville
 * @property string $adresse
 * @property int $code_postal
 * @property string $date_livraison
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
    protected $fillable = ['commande_id', 'ville', 'adresse', 'code_postal', 'date_livraison'];

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
