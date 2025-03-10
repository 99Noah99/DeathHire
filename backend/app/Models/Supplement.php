<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Supplement extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    protected $table = 'supplements';
    protected $primaryKey = 'id_supplement';

    protected $guarded = [];

    public function tueurSupplement()
    {
        return $this->belongsToMany(TueurSupplement::class, 'id_supplement', 'id_supplement');
    }

    public function commandeSupplement()
    {
        return $this->belongsToMany(CommandeSupplement::class, 'id_supplement', 'id_supplement');
    }
}
