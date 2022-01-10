<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
	<link rel="stylesheet" href="js/bootstrap.bundle.js" type="text/class">
	<link rel="stylesheet" href="css/bootstrap.bootstrap.css" type="text/css" >
	<title></title>
</head>
<body>
	<h3>Tambah data Pelanggan</h3>
	<form action="proses_tambah_pelanggan.php" method="post">
		Nama :
		<input type="text" name="nama" value="" class="form-control">
		Tanggal lahir :
		<input type="date" name="tanggal_lahir" value="" class="form-control">
		Jenis kelamin :
		<select name="jenis_kelamin" class="form-control">
			<option></option>
			<option value="L">Laki-laki></option>
			<option value="P">Perempuan></option>
		</select>
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"></textarea>

		Username :
		<input type="text" name="username" value="" class="form-control">
		Password :
		<input type="password" name="password" value="" class="form-control">
		Jurusan :
		<select name="id_playstation" class="form-control">
			<option></option>
<?php
			include "koneksi.php";
			$qry_playstation=mysqli_query($conn, "SELECT * FROM playstation");
			while ($data_playstation=mysqli_fetch_array($qry_playstation)) 
			{ echo '<option value="'.$data_playstation['id_playstation'].'">
				'.$data_playstation['nama_playstation'].'</option>';
			}
			?>
			</select><tr>
		<td>
		<input type="submit" name="simpan" value="Tambah data" class="btn btn-primary">	
		</td></tr>
		</form>

	<script src="js/bootstrap.bundle.min.js" type="text/css" ></script>
	<script src="js/bootstrap.bundle.js" type="text/css"></script>
	<script type="js/bootstrap" type="text/css"></script>
</body>
</html>