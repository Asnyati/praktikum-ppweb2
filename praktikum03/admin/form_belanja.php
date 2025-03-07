<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $customer = $_POST['customer'] ?? '';
    $produk = $_POST['produk'] ?? '';
    $jumlah = $_POST['jumlah'] ?? 0;
    
    $harga_produk = [
        "TV" => 4200000,
        "KULKAS" => 3100000,
        "MESIN CUCI" => 3800000
    ];
    
    $total_harga = isset($harga_produk[$produk]) ? $harga_produk[$produk] * $jumlah : 0;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <title>Form Belanja</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Belanja Online</h2>
                <form method="POST" action="form_belanja.php">
                    <div class="mb-3">
                        <label class="form-label">Customer</label>
                        <input type="text" class="form-control" name="customer" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Pilih Produk</label><br>
                        <input type="radio" name="produk" value="TV" required> TV
                        <input type="radio" name="produk" value="KULKAS"> KULKAS
                        <input type="radio" name="produk" value="MESIN CUCI"> MESIN CUCI
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jumlah</label>
                        <input type="number" class="form-control" name="jumlah" required>
                    </div>
                    <button type="submit" class="btn btn-success">Kirim</button>
                </form>
                
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") : ?>
                    <div class="mt-4 p-3 border rounded">
                        <p><strong>Nama Customer:</strong> <?= htmlspecialchars($customer) ?></p>
                        <p><strong>Produk Pilihan:</strong> <?= htmlspecialchars($produk) ?></p>
                        <p><strong>Jumlah Beli:</strong> <?= htmlspecialchars($jumlah) ?></p>
                        <p><strong>Total Belanja:</strong> Rp. <?= number_format($total_harga, 0, ',', '.') ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        Daftar Harga
                    </div>
                    <div class="card-body" style="background-color: #fff; color: #000;">
                        <p>TV: Rp. 4.200.000</p>
                        <p>Kulkas: Rp. 3.100.000</p>
                        <p>Mesin Cuci: Rp. 3.800.000</p>
                    </div>
                    <div class="card-footer bg-primary text-white">
                        <small>Harga Dapat Berubah Setiap Saat</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>