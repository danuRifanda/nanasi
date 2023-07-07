<?php include 'conn.php';
$nama_pemesan = $_POST['nama_pemesan'];
$makanan = $_POST['makanan'];
$minuman = $_POST['minuman'];
$kuantitas_makanan = $_POST['kuantitas_makanan'];
$kuantitas_minuman = $_POST['kuantitas_minuman'];
$jumlah_harga = $makanan * $kuantitas_makanan + $minuman * $kuantitas_minuman;

$sql = mysqli_query($koneksi, "INSERT INTO pemesanan(nama_pemesan,jumlah_harga) VALUES('$nama_pemesan','$jumlah_harga')");

echo "200 OK";

// header('location: admin.php');
