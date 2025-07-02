<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <center><h3>Form Nilai Mahasiswa</h3></center>
    <hr>
<?php
    $ar_matkul =[
        "DDP"=>"Dasar-Dasar Pemrograman",
        "PEMWEB1"=>"Pemrograman Web 1",
        "PEMWEB2"=>"Pemrograman Web 2",
        "SB"=>"Statistika dan Probabilitas",
        "BD"=>"Basis Data",
        "AI"=>"Kecerdasan Buatan",
        "JK"=>"Jaringan Komputer",
        "UI/UX"=>"UI/UX",
    ]
?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <div class="form-group row">
    <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nama" name="nama" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
    <div class="col-8">
      <select id="matkul" name="matkul" class="custom-select">
        <option value="">-- Pilih Mata Kuliah --</option>
        <option value="DDP">Dasar-Dasar Pemrograman</option>
        <option value="PEMWEB1">Pemrograman Web 1</option>
        <option value="PEMWEB2">Pemrograman Web 2</option>
<?php
        foreach($ar_matkul as $kode=>$nama) {
            echo "<option value='$kode'>$nama</option>";
        }
?>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
    <div class="col-8">
      <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_uas" class="col-4 col-form-label">NIlai UAS</label> 
    <div class="col-8">
      <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="nilai_tugas_praktikum" class="col-4 col-form-label">NIlai Tugas/Praktikum</label> 
    <div class="col-8">
      <input id="nilai_tugas_praktikum" name="nilai_tugas_praktikum" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
<hr>
<center><h3>Hasil Input Data Nilai Mahasiswa</h3></center>
<br>
<?php
    $_nama = $_POST['nama'];
    $_matkul = $_POST['matkul'];
    $_nilai_uts = $_POST['nilai_uts'];
    $_nilai_uas = $_POST['nilai_uas'];
    $_nilai_tugas_praktikum = $_POST['nilai_tugas_praktikum'];
?>
Nama Mahasiswa: <?=$_nama; ?><br>
Mata Kuliah: <?=$_matkul; ?><br>
Nilai UTS: <?=$_nilai_uts; ?><br>
Nilai UAS: <?=$_nilai_uas; ?><br>
Nilai Tugas/Praktikun: <?=$_nilai_tugas_praktikum; ?><br>
</body>
</html>