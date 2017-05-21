<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Contracts\Validation\Validator;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


public function showLogin()
{
    // show the form
    return view('login');
}

public function doLogin()
{
// process the form
	return view('welcome');
}


protected function formatValidationErrors(Validator $validator)
    {
        return $validator->errors()->all();
    }

}
