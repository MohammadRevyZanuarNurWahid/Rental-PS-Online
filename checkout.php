<?php
	session_start();
	include "koneksi.php";
	$cart=@$_SESSION['cart'];
	if(count($cart)>0) {
		$lama_pinjam=5; 
		$tgl_harus_kembali=date('Y-m-d' ,mktime(0,0,0,date('m'),(date('d')+$lama_pinjam),date('Y')));
		mysqli_query($conn,"insert into peminjaman_ps (id_pelanggan,tanggal_pinjam,tanggal_kembali) value('".$_SESSION['id_pelanggan']."','".date('Y-m-d')."','".$tgl_harus_kembali."')");
		$id=mysqli_insert_id($conn);
		foreach ($cart as $key_produk => $val_produk) {
			mysqli_query($conn, "insert into detail_peminjaman_ps (id_peminjaman_ps,id_ps,qty) value('".$id."','".$val_produk['id_ps']."','".$val_produk['qty']."')");
		}
		unset($_SESSION['cart']);
		echo '<script>alert("Anda berhasil mennyewa playstation");location.href="histori_peminjaman.php"</script>';
	}
?>