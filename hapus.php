<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
   $id = intval($_GET['id']);
   $koneksi->query("DELETE FROM Hewan WHERE id = $id");
  
    header("location: index.php");
   exit();
} else {
    header("location: index.php");
   exit();
}
?>