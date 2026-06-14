@extends('template')

@section('konten')

<h2>Data Minuman</h2>

<a href="/minuman/create" class="btn btn-primary">
    Tambah Data
</a>

<br><br>

<table class="table table-bordered">
    <tr>
        <th>Kode</th>
        <th>Merk</th>
        <th>Stock</th>
        <th>Tersedia</th>
        <th>Aksi</th>
    </tr>

    @foreach($minuman as $m)
    <tr>
        <td>{{ $m->kodeminuman }}</td>
        <td>{{ $m->merkminuman }}</td>
        <td>{{ $m->stockminuman }}</td>
        <td>{{ $m->tersedia }}</td>

        <td>
            <a href="/minuman/edit/{{ $m->kodeminuman }}"
               class="btn btn-warning">
               Edit
            </a>

            <a href="/minuman/hapus/{{ $m->kodeminuman }}"
               class="btn btn-danger">
               Hapus
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
