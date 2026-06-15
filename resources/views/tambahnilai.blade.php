@extends('template')

@section('title', 'Tambah Nilai Peserta')

@section('konten')

<h2>Tambah Data Nilai Peserta</h2>

<form action="/eas/store" method="POST">

    @csrf

    <p>
        Masukkan Nomer Peserta <br>
        <input type="text" name="nopeserta" required>
    </p>

    <p>
        Masukkan Nilai Teori <br>
        <input type="text" name="nilaiteori" required>
    </p>

    <p>
        Masukkan Nilai Praktek <br>
        <input type="text" name="nilaipraktek" required>
    </p>

    <button type="submit" class="btn btn-success">
        tambahkan
    </button>

    <a href="/eas" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
