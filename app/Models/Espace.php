<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espace extends Model
{
    protected $fillable = [
        'nom',
        'surface',
        'type',
        'capacite',
        'description',
        'tarif_journalier'
    ];
}
