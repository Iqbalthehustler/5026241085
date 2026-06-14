@extends('template')

@section('konten')

<h2>Tambah Data Minuman</h2>

<form action="/minuman/store" method="POST">

    @csrf

    <p>
        Merk Minuman <br>
        <input type="text"
               name="merkminuman"
               required>
    </p>

    <p>
        Stock Minuman <br>
        <input type="number"
               name="stockminuman"
               required>
    </p>

    <p>
        Tersedia <br>
        <select name="tersedia">
            <option value="Y">Ya</option>
            <option value="T">Tidak</option>
        </select>
    </p>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

</form>

@endsection
