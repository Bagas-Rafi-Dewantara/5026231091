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
        /*
        Mencari Counter yang Ada: Saat fungsi index() dipanggil (misalnya, ketika seseorang mengakses halaman web yang terkait dengan controller ini), aplikasi mencoba mencari baris di tabel pagecounter dengan ID 1. Asumsinya, baris ini menyimpan total jumlah pengunjung.
        Jika Counter Ditemukan:
        Ambil nilai jumlah saat ini dari baris tersebut.
        Tambahkan 1 ke nilai jumlah tersebut (karena ada pengunjung baru).
        Perbarui nilai jumlah di database dengan nilai yang baru ini.
        Jika Counter Tidak Ditemukan (kasus else yang saya tambahkan):
        Ini berarti ini adalah pengunjung pertama atau record counter belum ada.
        Maka, masukkan record baru ke tabel pagecounter dengan ID 1 dan jumlah 1.
        Mengirim Data ke View: Terlepas dari apakah counter diperbarui atau dibuat baru, nilai jumlah pengunjung yang terbaru ($newjumlah) akan ditetapkan ke $jumlahpengunjung dan kemudian dikirimkan ke view indexlat1.blade.php.
        Tampilan di Halaman: Di dalam indexlat1.blade.php, bisa menampilkan nilai $jumlahpengunjung ini, misalnya: Jumlah pengunjung: {{ $jumlahpengunjung }}.
        */
    }

}
