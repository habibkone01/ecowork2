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

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
