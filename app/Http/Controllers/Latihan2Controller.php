<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Latihan2Controller extends Controller
{
    //
    public function index()
    {
        // mengambil data dari table keranjang
        //$keranjang = DB::table('keranjang')->get(); //array all record
        $keranjangbelanja = DB::table('keranjangbelanja')->get();

    	// mengirim data keranjang ke view index
        return view('indexlat2',['keranjangbelanja' => $keranjangbelanja]);

    }

    // method untuk menampilkan view form tambah keranjang
    public function tambah()
    {

        // memanggil view tambah
        return view('tambahlat2');
    }

    // method untuk insert data ke table keranjang
    public function store(Request $request)
    {
        // insert data ke table keranjang
        DB::table('keranjangbelanja')->insert([
            'kodebarang' => $request->kode,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/latihan2');
    }



    // method untuk edit data keranjang
    public function edit($id) // ada primary key
    {
        // mengambil data keranjang berdasarkan id yang dipilih
        $keranjangbelanja = DB::table('keranjangbelanja')->where('keranjangbelanja_ID',$id)->get();
        // passing data keranjang yang didapat ke view edit.blade.php
        return view('edit',['keranjangbelanja' => $keranjangbelanja]);

    }

    // update data keranjang
    public function update(Request $request)
    {
        // update data keranjang
        DB::table('keranjangbelanja')->where('id',$request->id)->update([
            'kodebarang' => $request->kode,
            'jumlah' => $request->jumlah,
            'harga' => $request->harga
        ]);
        // alihkan halaman ke halaman keranjang
        return redirect('/latihan2');
    }

    // method untuk hapus data keranjang
    public function hapus($id)
    {
        // menghapus data keranjang berdasarkan id yang dipilih
        DB::table('keranjangbelanja')->where('id',$id)->delete();

        // alihkan halaman ke halaman keranjang
        return redirect('/latihan2');
    }


}
