<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class TueurSupplement extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'tueur_supplements';
    protected $primaryKey = 'id_tueur_supplement';

    protected $guarded = [];

    public function tueur()
    {
        return $this->hasMany(Tueur::class, 'id_tueur', 'id_tueur');
    }

    public function supplement()
    {
        return $this->hasMany(Supplement::class, 'id_supplement', 'id_supplement');
    }
}
