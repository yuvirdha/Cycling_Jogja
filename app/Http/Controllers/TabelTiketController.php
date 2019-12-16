<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class TabelTiketController extends Controller
{
    public function index()
    {
        
    	$pendaftars = DB::table('pendaftars')->get();
        return view('/Admin/tabel_tiket',compact('pendaftars'));

    }
    public function hapus($id)
    {
    
        DB::table('pendaftars')->where('id',$id)->delete();
            
        return redirect('/Admin/tabel_tiket');
    }

// public function hapus($id)
// {

// 	DB::table('events')->where('id',$id)->delete();
		
// 	return redirect('/admin/tabel_event');
// }
}