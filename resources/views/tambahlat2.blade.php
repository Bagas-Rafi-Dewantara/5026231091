@extends('template')
@section('content')
    <h3>Beli Apa?</h3>

    <a href="/latihan2" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    <form action="/latihan2/store" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="kode">
                Kode Barang
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="kode" placeholder="Masukkan Kode Barang" name="kode"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="jumlah">
                Jumlah Pembelian
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="jumlah" placeholder="Masukkan Jumlah Pembelian" name="jumlah"
                    required="required">
            </div>
        </div>

        <div class="form-group has-success">
            <label class="control-label col-sm-2" for="harga">
                Harga per item
            </label>
            <div class="col-sm-6">
                <input class="form-control" type="number" id="harga" placeholder="Masukkan Harga" name="harga"
                    required="required">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
