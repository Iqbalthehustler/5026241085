@extends('template')

@section('konten')

<h2>Tambah Data Buku</h2>

<form action="/buku/store" method="POST">

    @csrf

    <p>
        Judul Buku <br>
        <input type="text"
               name="judul"
               required>
    </p>

    <p>
        Penulis <br>
        <input type="text"
               name="penulis"
               required>
    </p>
Tahun <br>
        <input type="number"
               name="tahun"
               required>
    <p>
        Apakah sedang dipinjam? <br>
        <select name="sedang_dipinjam">
            <option value="1">Ya</option>
            <option value="0">Tidak</option>
        </select>
    </p>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

</form>

@endsection
