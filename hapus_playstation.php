<?php
	if ($_GET['id_playstation']) {
		include "koneksi.php";
		$qry_hapus=mysqli_query($conn,"delete form playstation where id_playstation='".$_GET['id_playstation']."'");
		if ($qry_hapus) {
			echo"<script>alert('Sukses hapus playstation');location.href='tampil_playstation.php';</script>";
		} else {
			echo"<script>alert('Gagal hapus playstation');location.href='tampil_playstation.php';</script>";
		}
	}
?>