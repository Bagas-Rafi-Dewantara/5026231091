@extends('template')
@section('content')

	<h3>Keranjang Belanja</h3>
    <a href="/latihan2/tambah" class="btn btn-success">Beli</a>
    <br/><br/>

	<table class="table table-stripped">
		<tr>
			<th>Kode Pembelian</th>
            <th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga per item</th>
			<th>Total</th>
			<th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $p)
		<tr>
			<td>{{ $p->id }}</td>
            <td>{{ $p->kodebarang }}</td>
			<td>{{ $p->jumlah }}</td>
			<td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
			<td>Rp {{ number_format($p->jumlah * $p->harga, 0, ',', '.') }}</td>
            //menambahkan Rp, format angka : 0 desimal dibelakang koma, dan titik untuk ribuan
			<td>
				<a href="/latihan2/hapus/{{ $p->id }}" class="btn btn-danger">Batal</a>
			</td>
		</tr>
		@endforeach
	</table>

@endsection
