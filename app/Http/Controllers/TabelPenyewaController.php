<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabelPenyewaController extends Controller
{
    public function index()
    {
    	$penyewa = DB::table('penyewas')->get();
    	return view('/admin/tabel_penyewa',compact('penyewa'));
 
    }

}
