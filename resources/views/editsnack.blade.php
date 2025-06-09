<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Snack</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body class="bg-light">


    <div class="container mt-4 mb-5">
        <h3 class="mb-4">Edit Snack</h3>

        <a href="/snack" class="btn btn-info mb-4"> Kembali</a>


        @foreach ($snack as $s)
            <div class="card shadow">
                <div class="card-body">
                    <form action="/snack/update" method="post">
                        {{ csrf_field() }}
                        {{-- Input hidden untuk ID snack --}}
                        <input type="hidden" name="id" value="{{ $s->id }}">

                        {{-- Merk Snack --}}
                        <div class="form-group row">
                            <label for="merksnack" class="col-sm-3 col-form-label">Merk Snack</label>
                            <div class="col-sm-9">
                                <input name="merksnack" type="text" id="merksnack" class="form-control"
                                    value="{{ old('merksnack') ?? $s->merksnack }}">
                            </div>
                        </div>

                        {{-- Harga Snack --}}
                        <div class="form-group row">
                            <label for="hargasnack" class="col-sm-3 col-form-label">Harga</label>
                            <div class="col-sm-9">
                                <input name="hargasnack" required="required" type="number" id="hargasnack" class="form-control"
                                    value="{{ old('hargasnack') ?? $s->hargasnack }}">
                            </div>
                        </div>

                        {{-- Tersedia (Radio Buttons) --}}
                        <div class="form-group row">
                            <label for="tersedia" class="col-sm-3 col-form-label">Tersedia</label>
                            <div class="col-sm-9">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="tersediaYa" name="tersedia" value="1"
                                        {{ (old('tersedia') ?? $s->tersedia) == 1 ? 'checked' : '' }} required>
                                    <label class="form-check-label" for="tersediaYa">Ya</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="tersediaTidak" name="tersedia" value="0"
                                        {{ (old('tersedia') ?? $s->tersedia) == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="tersediaTidak">Tidak</label>
                                </div>
                            </div>
                        </div>

                        {{-- Berat Snack --}}
                        <div class="form-group row">
                            <label for="berat" class="col-sm-3 col-form-label">Berat</label>
                            <div class="col-sm-9">
                                <input type="number" required="required" name="berat" id="berat" class="form-control"
                                    value="{{ old('berat') ?? $s->berat }}">
                            </div>
                        </div>

                        {{-- Tombol Simpan Data --}}
                        <div class="form-group row mt-4">
                            <div class="col-sm-9 offset-sm-3">
                                <button type="submit" class="btn btn-success btn-block">Simpan Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</body>

</html>
