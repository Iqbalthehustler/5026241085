<h2>Tambah Data Pembelian</h2>

<form action="/keranjang/store" method="post">
    @csrf

    Kode Barang
    <input type="text" name="kodebarang"><br><br>

    Jumlah
    <input type="text" name="jumlah"><br><br>

    Harga
    <input type="text" name="harga"><br><br>

    <input type="submit" value="Simpan">
</form>
