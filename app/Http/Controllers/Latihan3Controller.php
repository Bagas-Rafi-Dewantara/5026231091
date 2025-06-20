<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Latihan3Controller extends Controller
{
    public function index()
    {
    	// mengambil data dari table karyawan
        $karyawan = DB::table('karyawan')->get();

    	// mengirim data karyawan ke view index
    	return view('indexlat3',['karyawan' => $karyawan]);

    }

	// method untuk menampilkan view form tambah karyawan
	public function tambah()
	{

		// memanggil view tambah
		return view('tambahlat3');

	}

	// method untuk insert data ke table karyawan
	public function store(Request $request)
	{
		// insert data ke table karyawan
		DB::table('karyawan')->insert([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman karyawan
		return redirect('/latihan3');

	}

	// update data karyawan
	public function update(Request $request)
	{
		// update data karyawan
		DB::table('karyawan')->where('kodepegawai',$request->id)->update([
			'kodepegawai' => $request->kode,
			'namalengkap' => $request->nama,
			'divisi' => $request->divisi,
			'departemen' => $request->departemen
		]);
		// alihkan halaman ke halaman sofa
		return redirect('/latihan3');
	}

	// method untuk hapus data karyawan
	public function hapus($id)
	{
		// menghapus data karyawan berdasarkan kode yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/latihan3');
	}
}
