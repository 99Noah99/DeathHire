<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Commande extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'commandes';
    protected $primaryKey = 'id_commande';

    protected $guarded = [];

    public function cible()
    {
        return $this->hasOne(Cible::class, 'id_cible', 'id_cible');
    }

    public function statut()
    {
        return $this->hasOne(Statut::class, 'id_statut', 'id_statut');
    }

    public function user()
    {
        return $this->belongTo(User::class, 'id_user', 'id_user');
    }

    public function tueur()
    {
        return $this->belongTo(Tueur::class, 'id_tueur', 'id_tueur');
    }

    public function commandeSupplement()
    {
        return $this->hasMany(CommandeSupplement::class, 'id_commande', 'id_commande');
    }

    public function preuve()
    {
        return $this->hasOne(Preuve::class, 'id_commande', 'id_commande');
    }
}
