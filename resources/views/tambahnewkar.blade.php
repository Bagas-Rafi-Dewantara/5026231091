@extends('template')

@section('content')
    <h3>Data Karyawan Baru</h3>
    @if ($message = session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Berhasil!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            {{-- Jika ada pesan error validasi atau pesan gagal lainnya --}}
            @if ($message = session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Gagal!</strong> {{ $message }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

    <a href="/newkaryawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/newkaryawan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        {{--adalah helper Blade yang menghasilkan input hidden dengan token CSRF. Ini adalah fitur keamanan penting di Laravel untuk mencegah serangan Cross-Site Request Forgery. --}}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="NIP">
                NIP
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="NIP" placeholder="Masukkan NIP" name="NIP"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="nama">
                Nama
            </label>
            <div class="col-sm-6">
                {{-- name itu digunain untuk nama yang buat masukinnya --}}
                <input class="form-control" type="text" id="nama" placeholder="Masukkan Nama Lengkap" name="nama"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="pangkat">
                Pangkat
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="pangkat" placeholder="Masukkan Pangkat" name="pangkat"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="gaji">
                Gaji
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="pangkat" placeholder="Masukkan Gaji" name="gaji"
                    required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
