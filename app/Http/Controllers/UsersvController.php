<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use DB;

class UsersvController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersverwaltung()
    {
        return view('usersv');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getUsersv()
    {
    	$users = DB::table('users')->select('*');
        return Datatables::of($users)
            ->make(true);
    }
}
