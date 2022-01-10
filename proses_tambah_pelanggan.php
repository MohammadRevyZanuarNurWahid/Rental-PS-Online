<?php
if ($_POST) {
	$nama = $_POST['nama'];
	$tanggal_lahir = $_POST['tanggal_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$alamat = $_POST['alamat'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$id_playstation = $_POST['id_playstation'];
	if(empty($nama)){
			echo "<script>alert('Nama Pelanggan Tidak Boleh Kosong');location.href='tambah_pelanggan.php';</script>";

		} elseif(empty($username)){
			echo "<script>alert('Username Tidak Boleh Kosong');location.href='tambah_pelanggan.php';</script>";

		} elseif (empty($password)) {
			echo "<script>alert('Password Tidak Boleh Kosong');location.href='tambah_pelanggan.php';</script>";
	} else {
		include "koneksi.php";
		$insert = mysqli_query($conn, "insert into pelanggan (nama, tanggal_lahir, jenis_kelamin, alamat, username, password, id_playstation) value ('".$nama."','".$tanggal_lahir."','".$jenis_kelamin."',
		'".$alamat."','".$username."', '".$password."', '".$id_playstation."')")or die(mysqli_error($conn));
	if($insert){
			echo "<script>alert('sukses menambahkan pelanggan');location.href='tampil_pelanggan.php';</script>";
		} else {
			echo "<script>alert('gagal menambahkan data pelanggan');location.href='tambah_pelanggan.php';</script>";
			}
		}
	}
?>