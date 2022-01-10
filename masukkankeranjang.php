<?php
session_start();
	if ($_POST){
		include "koneksi.php";	

		$qry_get_ps=mysqli_query($conn,"select * from ps where id_ps = '".$_GET['id_ps']."'");
		$dt_ps=mysqli_fetch_array($qry_get_ps);
		$_SESSION['cart'][]=array(
			'id_ps'=>$dt_ps['id_ps'],
			'nama_ps'=>$dt_ps['nama_ps'],
			'qty'=>$_POST['pinjam_ps']
		);
	}
	header('location: keranjang.php');
?>