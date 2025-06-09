<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SnackController extends Controller
{
    public function index()
    {
    	// mengambil data dari table
    	// $snack = DB::table('snack')->get(); //array all records
        $snack = DB::table('snack')->paginate(10);
        //outputnya json dan ini tanpa slash

        //echo $snack
    	// mengirim data snack ke view index
    	return view('indexsnack',['snack' => $snack]);

    }
    // method untuk menampilkan view form tambah snack
    public function tambah()
    {

	    // memanggil view tambah
	    return view('tambahsnack');

    }

// method untuk insert data ke table snack
public function store(Request $request)
{
	// insert data ke table snack
	DB::table('snack')->insert([
		'merksnack' => $request->merksnack, //kanan source code nya
		'hargasnack' => $request->hargasnack,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');

}

// method untuk edit data snack
public function edit($id) //ada primary key
{
	// mengambil data snack berdasarkan id yang dipilih
	$snack = DB::table('snack')->where('id',$id) //khusus operator =
    ->get();
	// passing data snack yang didapat ke view edit.blade.php
	return view('editsnack',['snack' => $snack]);

}

// update data snack
public function update(Request $request)
{
	// update data snack
	DB::table('snack')->where('id',$request->id)->update([
		'merksnack' => $request->merksnack, //kanan source code nya
		'hargasnack' => $request->hargasnack,
		'tersedia' => $request->tersedia,
		'berat' => $request->berat
	]);
	// alihkan halaman ke halaman snack
	return redirect('/snack');
}

// method untuk hapus data snack
	public function hapus($id)
	{
		// menghapus data snack berdasarkan id yang dipilih
		DB::table('snack')->where('id',$id)->delete();

		// alihkan halaman ke halaman snack
		return redirect('/snack');
	}

public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->cari;

	// mengambil data dari table snack sesuai pencarian data
	$snack = DB::table('snack')
	->where('merksnack','like',"%".$cari."%")
	->paginate();

    // mengirim data snack ke view index
	return view('indexsnack',['snack' => $snack]);

}


}
