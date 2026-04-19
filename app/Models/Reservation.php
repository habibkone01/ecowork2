<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable =[
        'date_debut',
        'date_fin',
        'prix_total',
        'statut',
        'facture_acquitee',
        'date_creation',
        'user_id',
        'espace_id'
    ];
}
