<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Cible extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'cibles';
    protected $primaryKey = 'id_cible';

    protected $guarded = [];

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'id_cible', 'id_cible');
    }
}
