<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabelPenyewaController extends Controller
{
    public function index()
    {
    	$penyewa = DB::table('penyewas')->get();
    	return view('/Admin/tabel_penyewa',compact('penyewa'));
 
    }
    public function hapus($id)
    {
    
        DB::table('penyewas')->where('id',$id)->delete();
            
        return redirect('/admin/tabel_penyewa');
    }

}
