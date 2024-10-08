<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>CRUD PHP</title>
  </head>

  <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">CRUD PHP</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="tampilkanKontak.php">Tabel Kontak</a>
                        <a class="nav-link" href="#"></a>
                    </div>
                    </div>
                </div>
            </nav>
        </div>

        <div class="container mt-5">
            <h1>Santai Dullu Ngak Sih!</h1>

            <table class="table table-bordered table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Email</th>
                        <th scope="col">Pertanyaan</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>

                <?php
                        include "koneksi.php";
                        $showkontak = mysqli_query($koneksi,"select * from kontak");

                        while($r=mysqli_fetch_array($showkontak)){
                        ?>
                        <tr>
                            <th scope="rwo"><?php echo $r['id']; ?></th>
                            <td><?php echo $r['nama']; ?></td>
                            <td><?php echo $r['email']; ?></td>    
                            <td><?php echo $r['pertanyaan']; ?></td>
                            <td><?php echo date('d/m/Y H:i:s', strtotime($r['tanggal'])); ?></td>
                            <td width="15%" class="text-center">
                                <a href="ubahkontak.php?id=<?php $r['id']; ?>" class="btn btn-success">Ubah</a>
                                <a href="hapuskontak.php" class="btn btn-danger">Hapus</a>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>