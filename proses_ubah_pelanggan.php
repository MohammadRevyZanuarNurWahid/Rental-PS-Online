<?php
if ($_POST) {
	$id_pelanggan=$_POST['id_pelanggan'];
	$nama=$_POST['nama'];
	$tanggal_lahir=$_POST['tanggal_lahir'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_playstation=$_POST['id_playstation'];
	if (empty($nama)) {
		echo"<script>alert('nama tidak boleh kosong');location.href='tambah_pelanggan.php';<script>";
	
	} elseif (empty($username)) {
		echo"<script>alert('username tidak boleh kosong');location.href='tambah_pelanggan.php';<script>";
	} else {
		include "koneksi.php";
		if (empty($password)) {
			$update=mysqli_query($conn,"update pelanggan set nama='".$nama."',tanggal_lahir='".$tanggal_lahir."',jenis_kelamin='".$jenis_kelamin."',alamat='".$alamat."',username='".$username."',password='".$password."',id_playstation='".$id_playstation."' where id_pelanggan ='".$id_pelanggan."'") or die(mysqli_error($conn));
		if ($update) {
			echo"<script>alert('Sukses update data');location.href='tampil_pelanggan.php';</script>";
		}	else {
			echo"<script>alert('Gagal update data');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';<script>";
		}
		} else {
			$update=mysqli_query($conn."update pelanggan set nama='".$nama."',tanggal_lahir='".$tanggal_lahir."',jenis_kelamin='".$jenis_kelamin."',alamat='".$alamat."',username='".$username."', password='".$password."',id_playstation='".$id_playstation."' where id_pelanggan = '".$id_pelanggan."'") or die(mysqli_error($conn));
		if ($update) {
			echo"<script>alert('Sukses update data');location.href='tampil_pelanggan.php';<script>";
		}	else {
			echo"<script>alert('Gagal update data');location.href='ubah_pelanggan.php?id_pelanggan=".$id_pelanggan."';<script>";
			}
		}
	
	}
}
?>
