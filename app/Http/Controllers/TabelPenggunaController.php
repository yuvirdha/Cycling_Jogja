<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TabelPenggunaController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$users = DB::table('users')->get();

    	// mengirim data pegawai ke view index
    	return view('/admin/tabel_pengguna',['users' => $users]);

	}
	public function hapus($id)
	{

		DB::table('users')->where('id',$id)->delete();
			
		return redirect('/admin/tabel_pengguna');

	}
}