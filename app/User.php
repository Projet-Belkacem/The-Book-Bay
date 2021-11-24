<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
}
