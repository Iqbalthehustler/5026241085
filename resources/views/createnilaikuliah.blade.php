@extends('template')

@section('title', 'Tambah Nilai Kuliah')

@section('konten')

<h2>Tambah Data Nilai Kuliah</h2>

<form action="/nilaikuliah/store" method="POST">

    @csrf

    <p>
        NRP <br>
        <input type="text" name="NRP" required>
    </p>

    <p>
        Nilai Angka <br>
        <input type="number" name="NilaiAngka" required>
    </p>

    <p>
        SKS <br>
        <input type="number" name="SKS" required>
    </p>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="/nilaikuliah" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
