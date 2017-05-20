<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'Typ', 'categorie','Preis','Kunde','Lieferant','Minimalwert','beschreibung'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

}
