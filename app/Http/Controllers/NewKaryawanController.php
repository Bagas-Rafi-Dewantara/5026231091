<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewKaryawanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table newkaryawan
    	// $newkaryawan = DB::table('newkaryawan')->get(); //array all records
        $newkaryawan = DB::table('newkaryawan')->get();
        //outputnya json dan ini tanpa slash

        //echo $newkaryawan
    	// mengirim data newkaryawan ke view index
    	return view('indexnewkar',['newkaryawan' => $newkaryawan]);

    }
    // method untuk menampilkan view form tambah newkaryawan
    public function tambah()
    {

	    // memanggil view tambah
	    return view('tambahnewkar');

    }

// method untuk insert data ke table newkaryawan
public function store(Request $request)
{
    if (DB::table('newkaryawan')->where('NIP', $request->NIP)->exists()) {
            return redirect('/newkaryawan/tambah')->with('error', 'Karyawan sudah ada dengan NIP tersebut');
        } else {
	// insert data ke table newkaryawan
	DB::table('newkaryawan')->insert([
		'NIP' => $request->NIP, //kanan source code nya
		'nama' => $request->nama,
		'pangkat' => $request->pangkat,
		'gaji' => $request->gaji
	]);
    }
	// alihkan halaman ke halaman newkaryawan
	return redirect('/newkaryawan');

}

// public function proses(Request $request)
// {
//     $this->validate($request,[
//         'nama' => 'required|min:5|max:20',
//         'pekerjaan' => 'required',
//         'usia' => 'required|numeric'
//     ]);

//     return view('proses',['data' => $request]);
// }

// method untuk edit data newkaryawan
// public function edit($id) //ada primary key
// {
// 	// mengambil data newkaryawan berdasarkan id yang dipilih
// 	$newkaryawan = DB::table('newkaryawan')->where('newkaryawan_id',$id) //khusus operator =
//     ->get();
// 	// passing data newkaryawan yang didapat ke view edit.blade.php
// 	return view('edit',['newkaryawan' => $newkaryawan]);

// }

// update data newkaryawan
// public function update(Request $request)
// {
// 	// update data newkaryawan
// 	DB::table('newkaryawan')->where('newkaryawan_id',$request->id)->update([
// 		'newkaryawan_nama' => $request->nama,
// 		'newkaryawan_jabatan' => $request->jabatan,
// 		'newkaryawan_umur' => $request->umur,
// 		'newkaryawan_alamat' => $request->alamat
// 	]);
// 	// alihkan halaman ke halaman newkaryawan
// 	return redirect('/newkaryawan');
// }

// method untuk hapus data newkaryawan
	public function hapus($NIP)
	{
		// menghapus data newkaryawan berdasarkan id yang dipilih
		DB::table('newkaryawan')->where('NIP',$NIP)->delete();

		// alihkan halaman ke halaman newkaryawan
		return redirect('/newkaryawan');
	}

// public function cari(Request $request)
// {
// 	// menangkap data pencarian
// 	$cari = $request->cari;

// 	// mengambil data dari table newkaryawan sesuai pencarian data
// 	$newkaryawan = DB::table('newkaryawan')
// 	->where('newkaryawan_nama','like',"%".$cari."%")
// 	->paginate();

//     // mengirim data newkaryawan ke view index
// 	return view('index',['newkaryawan' => $newkaryawan]);

// }


}
