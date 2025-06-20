@extends('template')

@section('content')
    <h3>Data NEW KARYAWAN</h3>
    <a href="/newkaryawan/tambah" class="btn btn-success">Tambah Karyawan</a>
    <br>

    <br />

    <table class="table table-striped">
        <tr>
            <th>NIP</th>
            <th>nama</th>
            <th>pangkat</th>
            <th>gaji</th>
            <th></th>
        </tr>
        @foreach ($newkaryawan as $k)
            <tr>
                <td>{{$k->NIP }}</td>
                <td>{{$k->nama }}</td>
                <td>{{ $k->pangkat }}</td>
                <td>Rp {{ number_format($k->gaji, 0, ',', '.') }}</td>
                <td>
                    <a href="/latihan3/hapus/{{ $k->NIP }}" class="btn btn-danger">Hapus Data</a>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
