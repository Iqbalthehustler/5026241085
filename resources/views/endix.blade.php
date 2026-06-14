@extends('template')

@section('title', 'Keranjang Belanja')

@section('konten')

<h2>Keranjang Belanja</h2>

<table class="table table-bordered table-striped">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    @foreach($keranjang as $k)
    <tr>
        <td>{{ $k->id }}</td>
        <td>{{ $k->kodebarang }}</td>
        <td>{{ $k->jumlah }}</td>
        <td>{{ number_format($k->harga,0,',','.') }}</td>
        <td>{{ number_format($k->jumlah * $k->harga,0,',','.') }}</td>
        <td>
            <a href="/keranjang/hapus/{{ $k->id }}"
               class="btn btn-danger">
               Batal
            </a>

            <a href="/keranjang/add"
               class="btn btn-primary">
               Beli
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
