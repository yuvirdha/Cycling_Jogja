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
    public function edit_profil(Request $request)
    {
        return view('/editprofil', [
            'users' => $request->user()
        ]);
    }

    public function update_profil(Request $request)
{
    $request->user()->update(
        $request->all()
    );


    return redirect('homepage');

}
  
}
