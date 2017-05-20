<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;

class InsertProductsController extends Controller {





    protected function insert(Request $request)
    {
      $data = $request->all();
        return Products::create([
            'name' => $data['name'],
            'Typ' => $data['Typ'],
            'categorie' => $data['categorie'],
            'Preis' => $data['Preis'],
            'Kunde' => $data['Kunde'],
            'Lieferant' => $data['Lieferant'],
            'Minimalwert' => $data['Minimalwert'],
            'beschreibung' => $data['beschreibung'],

        ]);
    }
}
