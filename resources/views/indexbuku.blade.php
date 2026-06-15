@extends('template')

@section('konten')

<h2>Perpustakaan</h2>

<a href="/buku/create" class="btn btn-primary">
    Tambah Data
</a>

<br><br>

<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Tahun</th>
        <th>Kategori</th>
        <th>Ketersediaan</th>
        <th>Pinjam</th>
    </tr>

    @foreach($buku as $b)
    <tr>
        <td>{{ $b->judul }}</td>
        <td>{{ $b->penulis }}</td>
        <td>{{ $b->tahun }}</td>


        <td>
            @if(2026-$b->tahun <=5)
                Baru
            @else
                Lama
            {{-- @elseif($n->NilaiAngka <= 80)
                B
            @else
                A --}}
            @endif
        </td>

        <td>@if($b->sedang_dipinjam == TRUE)
                Tidak tersedia
            @else
                Tersedia</td>

@endif
        <td>
            @if($b->sedang_dipinjam)
    <button class="btn btn-secondary" disabled>Sedang Tidak Tersedia</button>
@else
    {{-- <button class="btn btn-primary">Pinjam Buku</button> --}}
    {{-- <a href="/buku/pinjam/{{ $b->id }}" class="btn btn-primary">
        Pinjam Buku
    </a> --}}
    <a href="/buku/pinjam/{{ $b->id }}"
   class="btn btn-primary"
   onclick="return confirm('Apakah Anda yakin ingin meminjam buku ini?')">
    Pinjam Buku
</a>
@endif
            </a>


        </td>
    </tr>
    @endforeach

</table>

@endsection

{{-- @foreach ($buku as $item)
<tr class="
    @if($item->status == 'lulus')
        bg-success text-white
    @elseif($item->status == 'tidak lulus')
        bg-danger text-white
    @endif
">
    <td>{{ $item->judul }}</td>
    <td>{{ $item->status }}</td>
</tr>
@endforeach --}}

{{-- @foreach ($buku as $item)
<tr>
    <td>{{ $item->judul }}</td>
    <td class="{{ $item->status == 'lulus' ? 'text-success' : 'text-danger' }}">
        {{ $item->status }}
    </td>
</tr>
@endforeach --}}
