<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TabelSepedaController extends Controller
{
    public function index()
    {
    	$sepeda = DB::table('sepedas')->get();
    	return view('/admin/tabel_sepeda',compact('sepeda'));
 
    }

    public function create()
    {

        return view('/admin/tambahsepeda');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        // menyimpan data file yang diupload ke variabel $file
        $gambar_sepeda = $request->file('gambar_sepeda');

        $img = time()."_".$gambar_sepeda->getClientOriginalName();

                // isi dengan nama folder tempat kemana file diupload
        $public = 'public';
        $gambar_sepeda->move($public,$img);

        return redirect('/admin/tabel_sepeda');
    }

}