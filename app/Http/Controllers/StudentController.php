<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Datatables;
use DB;

class StudentController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function datatable()
    {
        return view('student');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getstudent()
    {
    	$users = DB::table('user')->select('*');
        return Datatables::of($users)
            ->make(true);
    }
}