<?php 
include 'koneksi.php'; 

$id = $_GET['id'] ?? null;
if (!$id) {
    header("Location: index.php");
    exit();
}

// Ambil data berdasarkan id
$data = $koneksi->query("SELECT * FROM Hewan WHERE id=$id")->fetch_assoc();

if (!$data) {
    header("Location: index.php");
    exit();
}

if (isset($_POST['simpan'])) {
    $nama = $koneksi->real_escape_string($_POST['nama_hewan']);
    $jenis = $koneksi->real_escape_string($_POST['jenis_hewan']);
    $asal = $koneksi->real_escape_string($_POST['asal_hewan']);
    $jumlah = (int) $_POST['jumlah_hewan'];

    // Query UPDATE yang sesuai database
    $query = "UPDATE Hewan SET 
                Nama_hewan='$nama', 
                Jenis_hewan='$jenis', 
                Asal_hewan='$asal',
                Jumlah_hewan=$jumlah
              WHERE id=$id";

    if ($koneksi->query($query)) {
        header("Location: index.php");
        exit();
    } else {
        echo "<div class='alert alert-danger mt-3'>Gagal update: " . $koneksi->error . "</div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Hewan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Data Hewan</h2>
    <form method="post">
        <div class="mb-3">
          <label class="form-label">Nama Hewan</label>
          <input type="text" name="nama_hewan" class="form-control" required 
                 value="<?= htmlspecialchars($data['Nama_hewan']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Jenis Hewan</label>
          <input type="text" name="jenis_hewan" class="form-control" required 
                 value="<?= htmlspecialchars($data['Jenis_hewan']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Asal Hewan</label>
          <input type="text" name="asal_hewan" class="form-control" required 
                 value="<?= htmlspecialchars($data['Asal_hewan']) ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Jumlah Hewan</label>
          <input type="number" name="jumlah_hewan" class="form-control" required 
                 value="<?= htmlspecialchars($data['Jumlah_hewan']) ?>">
        </div>

        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
        <a href="index.php" class="btn btn-secondary">Batal</a>
    </form>
</div>
</body>
</html>