@extends('template')

@section('konten')

<h2>Edit Data Minuman</h2>

<form action="/minuman/update/{{ $minuman->kodeminuman }}"
      method="POST">

    @csrf

    <p>
        Merk Minuman <br>
        <input type="text"
               name="merkminuman"
               value="{{ $minuman->merkminuman }}"
               required>
    </p>

    <p>
        Stock Minuman <br>
        <input type="number"
               name="stockminuman"
               value="{{ $minuman->stockminuman }}"
               required>
    </p>

    <p>
        Tersedia <br>
        <select name="tersedia">

            <option value="Y"
            {{ $minuman->tersedia == 'Y' ? 'selected' : '' }}>
                Ya
            </option>

            <option value="T"
            {{ $minuman->tersedia == 'T' ? 'selected' : '' }}>
                Tidak
            </option>

        </select>
    </p>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="/minuman" class="btn btn-secondary">
        Kembali
    </a>

</form>

@endsection
