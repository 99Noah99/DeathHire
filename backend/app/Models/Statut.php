<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Statut extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'statut';
    protected $primaryKey = 'id_statut';

    protected $guarded = [];

    public function commande()
    {
        return $this->hasMany(Commande::class, 'id_statut', 'id_statut');
    }
}
