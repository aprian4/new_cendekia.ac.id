<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
    	return view('frontend.index');  
    }

    public function kontakkami()
    {
    	return view('frontend.kontakkami');  
    }

    public function lokerstaff()
    {
    	return redirect()->away('http://www.staff.cendekia.ac.id');
    }
}
