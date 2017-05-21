<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Products;
use Validator;

class InsertProductsController extends Controller {





    protected function insert(Request $request)
    {

      $this->validate($request, [
       'name' => 'bail|required|unique:Products|max:255',
       'Typ' => 'required',
       'Preis' => 'digits:2',
       'categorie' => '|required|max:255',
       //'Kunde' => '|required|max:255',
       'Lieferant' => '|required|max:255',
       'Minimalwert' => '|required|max:255',
       'beschreibung' => '|required|min:20|max:1000',
      // 'Kunde' => 'nullable|date',

   ]);


      $data = $request->all();
         Products::create([
            'name' => $data['name'],
            'Typ' => $data['Typ'],
            'categorie' => $data['categorie'],
            'Preis' => $data['Preis'],
            'Kunde' => $data['Kunde'],
            'Lieferant' => $data['Lieferant'],
            'Minimalwert' => $data['Minimalwert'],
            'beschreibung' => $data['beschreibung'],

        ]);
        return redirect()->back()->with('message','Ihre Daten wurden erfolgreich gespeichert!');
    }
}
