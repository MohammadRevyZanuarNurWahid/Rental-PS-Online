<?php
if ($_POST) {
	$jenis_playstation=$_POST['jenis_playstation'];
	$tahun_produksi=$_POST['tahun_produksi'];
	if (empty($jenis_playstation)) {
		echo "<script>alert('jenis playstation harus di isi');location.href='tampil_playstation.php';</script>";
	} elseif(empty($tahun_produksi)) {
		echo "<scrip>alert('tahun produksi tidak boleh kosong');location.href='tampil_playstation.php';</script>";
	} else {
		include"koneksi.php";
		$insert=mysqli_query($conn, "insert into playstation (jenis_playstation, tahun_produksi) value ('".$jenis_playstation."','".$tahun_produksi."')");
		if ($insert) {
			echo "<script>alert('Sukses menambahkan data playstation');location.href='tampil_playstation.php';</script>";
		} else {
			echo "<script>alert('Gagal menambahkan data playstation');location.href='tampil_playstation.php';</script>";
		}
	} 
}
?>