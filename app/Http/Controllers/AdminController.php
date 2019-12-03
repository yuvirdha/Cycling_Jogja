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
    // method untuk insert data ke table pegawai
    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('events')->insert([
            'gambar_event' => $request->gambar_event,
            'nama_event' => $request->nama_event,
            'rincian_event' => $request->rincian_event,
            'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
            'rute' => $request->rute,
            'harga_tiket' => $request->harga_tiket
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    
    }
}
