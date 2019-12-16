<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class TabelSepedaController extends Controller
{
    public function index()
    {
    	$sepedas = DB::table('sepedas')->get();
    	return view('/Admin/tabel_sepeda',compact('sepedas'));
 
    }

    public function create()
    {

        return view('/Admin/tambahsepeda');

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'gambar_sepeda' => 'required',
        ]);
    
    
    
        // menyimpan data file yang diupload ke variabel $file
        $gambar_sepeda = $request->file('gambar_sepeda');
    
        $img = time()."_".$gambar_sepeda->getClientOriginalName();
    
                  // isi dengan nama folder tempat kemana file diupload
        $public = 'images';
        $gambar_sepeda->move($public,$img);
    
        DB::table('sepedas')->insert([
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stock' => $request->stock,
            'gambar_sepeda' => $img,
        ]);
    

        return redirect('/Admin/tabel_sepeda');
    }

    public function edit($id)
    {

        $sepedas = DB::table('sepedas')->where('id',$id)->get();

        return view('/Admin/editsepeda',compact('sepedas'));


    }

    public function update(Request $request)
    {

        DB::table('sepedas')->where('id',$request->id)->update([

            'gambar_sepeda' => $request->gambar_sepeda,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stock' => $request->stock,
        ]);

        return redirect('/Admin/tabel_sepeda');
    }

    public function hapus($id)
    {

        DB::table('sepedas')->where('id',$id)->delete();
            
        return redirect('/Admin/tabel_sepeda');
    }

}