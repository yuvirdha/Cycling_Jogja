<?php

namespace App\Http\Controllers;
use App\Event;
use Illuminate\Http\Request;
use DB;
use Auth;

class PemesananSepedaController extends Controller
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

        $sepeda = DB::table('sepedas')->where('id', $id)->get();
        $user = DB::table('users')->where('id', $user->id)->get();

        

        return view('pemesanansepeda',compact('sepeda','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store($id_sepeda)
    {
        $user = Auth::user();
        $id_user =  $user->id;

        $token = rand(10,100);

	DB::table('penyewas')->insert([
        'id_user' => $id_user,
        'id_sepeda'=>$id_sepeda,
        'token' => $token
	    ]);

	return redirect('/tiket');

}
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Pemesanan $pemesanan)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Pemesanan $pemesanan)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Pemesanan $pemesanan)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Event  $event
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Pemesanan $pemesanan)
    // {
    //     //
    // }
}
