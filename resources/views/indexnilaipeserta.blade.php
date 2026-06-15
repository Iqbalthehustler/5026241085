@extends('template')

@section('konten')

<h2>Kode Soal nilai_peserta</h2>

<a href="/eas/create" class="btn btn-primary">
    Tambah Data
</a>

<br><br>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>No Peserta</th>
        <th>Nilai Teori</th>
        <th>Nilai Praktek</th>
        <th>Rata-Rata</th>
        <th>Status</th>
    </tr>

    @foreach($nilai as $n)
    <tr>
        <td>{{ $n->id }}</td>
        <td>{{ $n->nopeserta }}</td>
        <td>{{ $n->nilaiteori }}</td>
        <td>{{ $n->nilaipraktek }}</td>

        <td>{{ number_format(($n->nilaipraktek + $n->nilaiteori)/2) }}</td>

        <td>
            @if(($n->nilaipraktek + $n->nilaiteori)/2 >= 75)
                <div class="bg-success text-white">
            <h3>Lulus</h3>

        </div>
            @else
                   <div class="bg-danger text-white">
            <h3>Gagal</h3>

        </div>
            @endif
        </td>






        </td>
    </tr>
    @endforeach

</table>

@endsection


