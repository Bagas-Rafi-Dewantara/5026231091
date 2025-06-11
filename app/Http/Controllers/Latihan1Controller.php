<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Latihan1Controller extends Controller
{
    public function index()
    {
        $counter = DB::table('pagecounter')->where('ID', 1)->first();
        $jumlahpengunjung = 0;
        if($counter){
            $newjumlah =$counter-> jumlah+1;
            DB::table('pagecounter')
            ->where('id',1)
            ->update(['jumlah'=>$newjumlah]);
        }
        $jumlahpengunjung = $newjumlah;
         return view('indexlat1', ['jumlahpengunjung' => $jumlahpengunjung]);

    }

}
