<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabelPenyewaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$penyewa = DB::table('penyewa')->get();
 
    	// mengirim data pegawai ke view index
    	return view('/admin/tabel_penyewa',compact('penyewa'));
 
    }

}
