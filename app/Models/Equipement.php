<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    protected $fillable =[
        'nom'
    ];

    public function espaces()
    {
        return $this->belongsToMany(Espace::class);
    }
}
