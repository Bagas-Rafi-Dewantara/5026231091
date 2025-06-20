@extends('template')

@section('content')
    <h3>Data Pegawai</h3>

    <a href="/pegawai" class="btn btn-info"> Kembali</a>

    <br />
    <br />

    <form action="/pegawai/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        {{--adalah helper Blade yang menghasilkan input hidden dengan token CSRF. Ini adalah fitur keamanan penting di Laravel untuk mencegah serangan Cross-Site Request Forgery. --}}

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
            <label class="control-label col-sm-2" for="jabatan">
                Jabatan
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="jabatan" placeholder="Masukkan Jabatan" name="jabatan"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="umur">
                Umur
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="text" id="umur" placeholder="Masukkan Umur" name="umur"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="alamat">
                Alamat
            </label>
            <div class="col-sm-6">
                <textarea class="form-control" type="text" id="alamat" placeholder="Masukkan Alamat" name="alamat"
                    required="required"></textarea>
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
