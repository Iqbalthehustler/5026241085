@extends('template')

@section('title', 'Edit Nilai Kuliah')

@section('konten')

<h2>Edit Data Nilai Kuliah</h2>

<form action="/nilaikuliah/{{ $nilaikuliah->ID }}/update"
      method="POST">

    @csrf

    <p>
        NRP <br>
        <input type="text"
               name="NRP"
               value="{{ $nilaikuliah->NRP }}"
               required>
    </p>

    <p>
        Nilai Angka <br>
        <input type="number"
               name="NilaiAngka"
               value="{{ $nilaikuliah->NilaiAngka }}"
               required>
    </p>

    <p>
        SKS <br>
        <input type="number"
               name="SKS"
               value="{{ $nilaikuliah->SKS }}"
               required>
    </p>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="/nilaikuliah" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
