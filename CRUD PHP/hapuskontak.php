<?php
    include "koneksi.php"; 

    $selected_id = $_GET["id"];
    $query = "DELETE FROM kontak WHERE id=$selected_id";

    mysqli_query($koneksi, $query);
    $koneksi->close();

    header("Location: kontak.php");
    exit()
?>