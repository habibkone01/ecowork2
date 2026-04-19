<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espace extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'surface',
        'type',
        'capacite',
        'description',
        'tarif_journalier',
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class, 'espace_equipement');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
