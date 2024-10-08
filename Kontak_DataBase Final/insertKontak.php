<?php
    include "koneksi.php";

    $nama = $_POST['nama'];
	$email = $_POST['email'];
	$pertanyaan = $_POST['pertanyaan'];

    $query = "INSERT INTO kontak(nama, email, pertanyaan) VALUES ('$nama','$email','$pertanyaan');";

    mysqli_query($koneksi, $query);
    $koneksi->close();

    header("Location: kontak.php");
    exit()
?>
