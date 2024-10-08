<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolahan Form</title>
</head>
<body>
    <FORM ACTION="" METHOD="POST" NAME="input">
        Nama Anda : <input type="text" name="tnama"><br>
        <input type="submit">
    </FORM>
</body>
</html>

<?php
    if (isset($_POST['tnama'])) {
        $nama = $_POST['tnama'];
        echo $nama!="" ? "Nama Anda : <br>$nama</br>" :"";
    }
?>