<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;



class TabelEventController extends Controller
{
    public function index()
    {
    	$events = DB::table('events')->get();
        return view('/admin/tabel_event',compact('events'));

    }
public function create()
{

	return view('/admin/tambahevent');

}
public function store(Request $request)
{
	$this->validate($request, [
		'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
		'nama_event' => $request->nama_event,
		'rincian_event' => $request->rincian_event,
        'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
        'rute' => $request->rute,
        'harga_tiket' => $request->harga_tiket
	]);

	// menyimpan data file yang diupload ke variabel $file
	$gambar_event = $request->file('gambar_event');

	$img = time()."_".$gambar_event->getClientOriginalName();

			  // isi dengan nama folder tempat kemana file diupload
	$public = 'public';
	$gambar_event->move($public,$img);

	return redirect('/admin/tabel_event');

}
public function edit($id)
{

    $events = DB::table('events')->where('id',$id)->get();

    return view('/admin/editevent',compact('events'));


}

public function update(Request $request)
{

	DB::table('events')->where('id',$request->id)->update([

        'gambar_event' => $request->gambar_event,
		'nama_event' => $request->nama_event,
		'rincian_event' => $request->rincian_event,
        'waktu_pelaksanaan' => $request->waktu_pelaksanaan,
        'rute' => $request->rute,
        'harga_tiket' => $request->harga_tiket
	]);

	return redirect('/admin/tabel_event');
}

public function hapus($id)
{

	DB::table('events')->where('id',$id)->delete();
		
	return redirect('/admin/tabel_event');
}
}