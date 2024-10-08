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

<a href="tampilkanKontak.php">Tampilkan Kontak</a>
<div class="container">
	<h2>Form Kontak</h2>
	<form action="insertKontak.php" method="post">
		<div class="form-group">
			<label for="nama">Nama:</label>
			<input type="text" class="form-control" id="nama" name="nama" required>
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" class="form-control" id="email" name="email" required>
		</div>
		<div class="form-group">
			<label for="pertanyaan">Pertanyaan:</label>
			<textarea class="form-control" rows="5" id="pertanyaan" name="pertanyaan" required></textarea>
		</div>
		<input type="submit" class="btn btn-primary" name="submit" value="Kirim"></input>
	</form>
</div>

</body>
</html>
