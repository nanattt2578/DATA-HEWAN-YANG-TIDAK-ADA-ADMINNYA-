<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {
  $nama = $_POST['nama_hewan'];
  $jenis = $_POST['jenis_hewan'];
  $asal = $_POST['asal_hewan'];
  $jumlah = $_POST['jumlah_hewan'];

  $query = "INSERT INTO Hewan (Nama_hewan, Jenis_hewan, Asal_hewan, Jumlah_hewan)
            VALUES ('$nama', '$jenis', '$asal', '$jumlah')";

  if (mysqli_query($koneksi, $query)) {
    header("Location: index.php");
    exit();
  } else {
    echo "Gagal menambahkan data: " . mysqli_error($koneksi);
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Hewan</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
  <h2>Tambah Data Hewan</h2>
  <form method="post">

    <div class="mb-3">
      <label class="form-label">Nama Hewan</label>
      <input type="text" name="nama_hewan" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Jenis Hewan</label>
      <input type="text" name="jenis_hewan" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Asal Hewan</label>
      <input type="text" name="asal_hewan" class="form-control" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Jumlah Hewan</label>
      <input type="number" name="jumlah_hewan" class="form-control" required>
    </div>

    <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    <a href="index.php" class="btn btn-secondary">Batal</a>

  </form>
</body>
</html>