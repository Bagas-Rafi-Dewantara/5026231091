@extends('template')

@section('content')
    <div class="container mt-4 mb-5">
        <h3 class="mb-4">Data Snack</h3>
        <a href="/snack" class="btn btn-info mb-4"> Kembali</a>

        <div class="card shadow-sm">
            <div class="card-body">
                <form action="/snack/store" method="post">
                    {{ csrf_field() }}

                    {{-- Merk Snack --}}
                    <div class="form-group row">
                        <label for="merksnack" class="col-sm-3 col-form-label">Merk Snack</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="merksnack" placeholder="Masukkan Merk Snack" name="merksnack"
                                required="required">
                        </div>
                    </div>

                    {{-- Harga Snack --}}
                    <div class="form-group row">
                        <label for="hargasnack" class="col-sm-3 col-form-label">Harga</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" id="hargasnack" placeholder="Masukkan harga dalam Rupiah" name="hargasnack"
                                required="required">
                        </div>
                    </div>

                    {{-- Tersedia (Radio Buttons) --}}
                    <div class="form-group row">
                        <label for="tersedia" class="col-sm-3 col-form-label">Tersedia</label>
                        <div class="col-sm-9">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="tersediaYa" name="tersedia" value="1" required>
                                <label class="form-check-label" for="tersediaYa">Ya</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" id="tersediaTidak" name="tersedia" value="0">
                                <label class="form-check-label" for="tersediaTidak">Tidak</label>
                            </div>
                        </div>
                    </div>

                    {{-- Berat Snack --}}
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="berat">Berat</label>
                        <div class="col-sm-9">
                            <input class="form-control" type="number" id="berat" placeholder="Masukkan berat dalam gram" name="berat"
                                required="required">
                        </div>
                    </div>

                    {{-- Tombol Submit --}}
                    <div class="form-group row mt-4">
                        <div class="col-sm-9 offset-sm-3">
                            <button type="submit" class="btn btn-success btn-block">Simpan Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
