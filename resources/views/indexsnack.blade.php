@extends('template')

@section('content')
    <div class="container mt-4 mb-5">
        <h3 class="mb-4">Database Snacks</h3>

        <div class="d-flex justify-content-between align-items-center mb-4">
            <a href="/snack/tambah" class="btn btn-primary"> + Tambah Snack</a>

            <form action="/snack/cari" method="GET" class="form-inline">
                <div class="input-group">
                    <input type="text" class="form-control" name="cari" placeholder="Cari snack .."
                        value="{{ request('cari') }}">
                    <div class="input-group-append">
                        <button class="btn btn-info" type="submit">CARI</button>
                    </div>
                </div>
            </form>
        </div>
        

        <table class="table table-striped table-hover">
            <tr>
                <th>Merk Snack</th>
                <th>Harga</th>
                <th>Tersedia</th>
                <th>Berat</th>
                <th>Opsi</th>

            </tr>
            @foreach ($snack as $s)
                <tr>
                    <td>{{ $s->merksnack }}</td>
                    <td>{{ $s->hargasnack }}</td>
                    <td>{{ $s->tersedia ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                    <td>{{ $s->berat }}</td>
                    <td>
                        <a href="/snack/edit/{{ $s->id }}" class="btn btn-success">Edit</a>
                        |
                        <a href="/snack/hapus/{{ $s->id }}" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $snack->links() }}
    @endsection
