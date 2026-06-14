@extends('template')

@section('title', 'Data Nilai Kuliah')

@section('konten')

<h2>Data Nilai Kuliah</h2>

<a href="/nilaikuliah/create" class="btn btn-primary">
    Tambah Data
</a>

<br><br>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NRP</th>
        <th>Nilai Angka</th>
        <th>SKS</th>
        <th>Nilai Huruf</th>
        <th>Bobot</th>
        <th>Aksi</th>
    </tr>

    @foreach($nilaikuliah as $n)
    <tr>
        <td>{{ $n->ID }}</td>
        <td>{{ $n->NRP }}</td>
        <td>{{ $n->NilaiAngka }}</td>
        <td>{{ $n->SKS }}</td>

        <td>
            @if($n->NilaiAngka <= 40)
                D
            @elseif($n->NilaiAngka <= 60)
                C
            @elseif($n->NilaiAngka <= 80)
                B
            @else
                A
            @endif
        </td>

        <td>{{ $n->NilaiAngka * $n->SKS }}</td>

        <td>
            <a href="/nilaikuliah/{{ $n->ID }}/edit"
               class="btn btn-warning">
                Edit
            </a>

            <a href="/nilaikuliah/{{ $n->ID }}/hapus"
               class="btn btn-danger"
               onclick="return confirm('Yakin hapus data?')">
                Hapus
            </a>
        </td>
    </tr>
    @endforeach

</table>

@endsection
