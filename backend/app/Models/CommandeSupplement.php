<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class CommandeSupplement extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'commande_supplements';
    protected $primaryKey = 'id_commande_supplement';

    protected $guarded = [];

    public function commande()
    {
        return $this->belongsToMany(Commande::class, 'id_commande', 'id_commande');
    }

    public function supplement()
    {
        return $this->belongsToMany(Supplement::class, 'id_supplement', 'id_supplement');
    }
}
