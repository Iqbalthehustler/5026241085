<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<h2>Tambah Data Pembelian</h2>

<form action="/keranjang/store" method="post">
    @csrf

    Kode Barang
    <input type="text" name="kodebarang"><br><br>

    Jumlah
    <input type="text" name="jumlah"><br><br>

    Harga
    <input type="text" name="harga"><br><br>

    <button type="submit" class="btn btn-success">
    Simpan
</button>
<a href="/keranjang" class="btn btn-secondary">
    Kembali
</a>
</form>
