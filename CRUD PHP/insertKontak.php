<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
	$email = $_POST['email'];
	$pertanyaan = $_POST['pertanyaan'];
    $tanggal = date("Y-m-d H:i:s");

    $query = "INSERT INTO kontak(nama, email, pertanyaan, tanggal) VALUES ('$nama','$email','$pertanyaan','$tanggal');";

    mysqli_query($koneksi, $query);
    $koneksi->close();

    header("Location: kontak.php");
    exit()
?>
