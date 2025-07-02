<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Belanja Online</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
        body {
            font-family: sans-serif;
        }
</style>
<body>
    <div class="container mt-4">
        <h2 class="text-center">Belanja Online</h2><hr>
        <br>
        <form method="post">
            <div class="form-group row">
                <label for="customer" class="col-2 col-form-label"><strong>Customer</strong></label>
                <div class="col-6">
                    <input type="text" name="customer" id="customer" class="form-control" placeholder="Nama Customer" required>
                </div>
            </div>
            <br>
            <div class="form-group row">
            <label class="col-2"><strong>Pilih Produk</strong></label>
            <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="produk" value="TV" required>
                    <label class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="produk" value="Kulkas" required>
                    <label class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" name="produk" value="Mesin Cuci" required>
                    <label class="custom-control-label">Mesin Cuci</label>
                </div>
            </div>
    </div>
    <br>
    <div class="form-group row">
        <label for="jumlah" class="col-2 col-form-label"><strong>Jumlah</strong></label>
        <div class="col-2">
            <input type="number" name="jumlah" id="jumlah" class="form-control" min="1" placeholder="Jumlah" required>
        </div>
    </div>
    <br>
    <div class="form-group row">
        <div class="offset-2 col-8">
            <button style="background-color: green;" type="submit" name="submit" class="btn btn-primary">Kirim</button>
        </div>
    </div>
    <br>
</form><hr>
<br>
<?php
if (isset($_POST['submit'])) {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = (int)$_POST['jumlah'];

    // Array harga produk
    $ar_harga_produk = [
        "TV" => 4200000,
        "Kulkas" => 3100000,
        "Mesin Cuci" => 3800000
    ];

    // Hitung total harga
    $total_harga = $ar_harga_produk[$produk] * $jumlah;

    // Cetak hasilnya
    echo "<h3>Hasil Belanja <br></h3>";
    echo "Nama Customer : $customer <br>";
    echo "Produk Pilihan : $produk <br>";
    echo "Jumlah Beli : $jumlah pcs <br>";
    echo "Total Belanja : Rp " . number_format($total_harga, 0, ',', '.') . "<br>";
}
?>

</body>
</html>
