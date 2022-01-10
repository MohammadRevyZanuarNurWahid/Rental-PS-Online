<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" >
	<link rel="stylesheet" href="js/bootstrap.bundle.js" type="text/class">
	<link rel="stylesheet" href="css/bootstrap.bootstrap.css" type="text/css" >
	<title></title>
</head>
<body>
<?php
	include "koneksi.php";
	$qry_get_pelanggan=mysqli_query($conn,"select * from pelanggan where id_pelanggan = '".$_GET['id_pelanggan']."'");
	$dt_pelanggan=mysqli_fetch_array($qry_get_pelanggan);
	?>
<h3>Ubah data</h3>
	<form action="proses_ubah_pelanggan.php" method="post">
		<input type="hidden" name="id_pelanggan" value="<?=$dt_pelanggan['id_pelanggan']?>" >
		Nama Pelanggan :
		<input type="text" name="nama" value="<?=$dt_pelanggan['nama']?>" class="form-control">
		Tanggal lahir :
		<input type="date" name="tanggal_lahir" value="<?=$dt_pelanggan['tanggal_lahir']?>" class="form-control">
		Jenis kelamin :
		<?php
		$arr_jk=array('L'=>'Laki-laki','P'=>'Perempuan');
		?>
		<select name="jenis_kelamin" class="form-control">
			<option></option>
	<?php foreach ($arr_jk as $key_jk => $val_jk): 
				if ($key_jk==$dt_pelanggan['jenis_kelamin']) {
					$selek="selected";
			} else {
				$selek="";
			}	
			?>
			<option value="<?=$key_gender?>"  <?=$selek?>><?=$val_jk?></option>
			<?php endforeach; ?>
		</select>
		Alamat :
		<textarea name="alamat" class="form-control" rows="4"><?=$dt_pelanggan['alamat']?></textarea>
		Playstation :
		<select name="id_playstation" class="form-control">
			<option></option>
<?php
			include "koneksi.php";
			$qry_playstation=mysqli_query($conn,"select * from playstation");
			while ($data_playstation=mysqli_fetch_array($qry_playstation)) {
				if ($data_playstation['id_playstation']==$dt_pelanggan['id_playstation']) {
					$selek="selected";
				} else {
					$selek="";
				}
			echo'<option value="'.$data_playstation['id_playstation'].'"'.$selek.'>'.$data_playstation['jenis_playstation'].'</option>';
			}
			?>
</select>
		Username :
		<input type="text" name="username" value="<?=$dt_pelanggan['username']?>" class="form-control">
		Password :
		<input type="password" name="password" value="" class="form-control">
		<input type="submit" name="simpan" value="Ubah data Pelanggan" class="btn btn-primary">
	</form>

	<script src="js/bootstrap.bundle.min.js" type="text/css" ></script>
		<script src="js/bootstrap.bundle.js" type="text/css"></script>
		<script type="js/bootstrap" type="text/css"></script>
</body>
</html>