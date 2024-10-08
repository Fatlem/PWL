<!DOCTYPE html>
<html>
<head>
	<title>Form Kontak</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<a href="index.php">Home</a>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAMA</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PERTANYAAN</th>
    </tr>
  </thead>
  <tbody>

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
        </tr>
        <?php
        }
        ?>
  </tbody>
</table>

</body>
</html>
