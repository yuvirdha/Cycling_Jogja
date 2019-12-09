<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Event;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
    	$events = Event::all();
 
    	return view('Admin.dashboard', compact('events'));
 
    }
    public function create()
    {

	return view('homepage.tambahevent');
 
    }
   
}
