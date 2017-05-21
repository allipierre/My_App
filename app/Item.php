<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{

    public $fillable = ['name', 'Typ', 'categorie','Preis','Lieferant','Minimalwert','beschreibung'];

}
