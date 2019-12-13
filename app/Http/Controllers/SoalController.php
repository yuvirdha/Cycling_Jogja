<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;



class SoalController extends Controller
{
    public function index()
    {
    	$soal = DB::table('soals')->get();
        return view('Admin.soal',compact('soal'));

    }
public function create()
{

	return view('Admin.tambahsoal');

}
public function store(Request $request)
{

	DB::table('soals')->insert([
		'soal' => $request->soal,
        'opsi_a' => $request->opsi_a,
        'opsi_b' => $request->opsi_b,
        'opsi_c' => $request->opsi_c,
        'opsi_d' => $request->opsi_d,
		'jawaban_benar' => $request->jawaban_benar,
	]);

	// die;

	return redirect('/admin/soal');

}
public function edit($id)
{

    $soal = DB::table('soals')->where('id',$id)->get();

    return view('Admin.editsoal',compact('soal'));


}

public function update(Request $request)
{

	DB::table('soals')->where('id',$request->id)->update([

        'soal' => $request->soal,
        'opsi_a' => $request->opsi_a,
        'opsi_b' => $request->opsi_b,
        'opsi_c' => $request->opsi_c,
        'opsi_d' => $request->opsi_d,
		'jawaban_benar' => $request->jawaban_benar,
	]);

	return redirect('/admin/soal');
}

public function hapus($id)
{

	DB::table('soals')->where('id',$id)->delete();
		
	return redirect('/admin/soal');
}
}