<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = Auth::user(); 
        //print($user->id);

        $user = DB::table('users')->where('id', $user->id)->get();

        // print_r($event);
        // print_r($user);
        // die;

        return view('pemesanan',compact('event','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
 
public function edit($id)
{
        $user = Auth::user(); 
        $user = DB::table('users')->where('id', $user->id)->get();
        return view('/editprofil',compact('user'));

}
  
}
