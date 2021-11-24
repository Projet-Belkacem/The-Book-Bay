<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $theme_id
 * @property string $titre
 * @property float $prix
 * @property string $auteur
 * @property string $description
 * @property string $chemin_photo_couverture
 * @property string $quantite_actuelle
 * @property Theme $theme
 * @property LigneCommande[] $ligneCommandes
 */
class Ouvrage extends Model
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
    protected $fillable = ['theme_id', 'titre', 'prix', 'auteur', 'description', 'chemin_photo_couverture', 'quantite_actuelle'];

    /**
     * Indicates if the model should be timestamped.
     * 
     * @var bool
     */
    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function theme()
    {
        return $this->belongsTo('App\Theme');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ligneCommandes()
    {
        return $this->hasMany('App\LigneCommande');
    }
}
