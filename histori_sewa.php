<?php
	include "header.php";
?>
<h2>Histori Penyewaan Playstation</h2>
<table class="table table-hover table-striped">
	<thead>
		<th>NO</th><th>Tanggal Sewa</th><th>Tanggal harus kembali</th><th>Jenis Playstation</th><th>Status</th><th>Aksi</th>
	</thead>
	<tbody>
		<?php
		include "koneksi.php";
		$qry_histori=mysqli_query($conn,"select * from peminjaman_ps order by id_peminjaman_ps desc");
		$no=0;
		while ($dt_histori=mysqli_fetch_array($qry_histori)) {
			$no++;

			$buku_dipinjam="<ol>";
			$qry_buku=mysqli_query($conn,"select * from detail_peminjaman_ps join buku on ps.id_ps=detail_peminjaman_ps.id_ps where id_peminjaman_ps = '".$dt_histori['id_peminjaman_ps']."'");
		while ($dt_ps=mysqli_fetch_array($qry_ps)) {
			$ps_dipinjam.="<li>".$dt_ps['nama_ps']."</li>";
		}
		$ps_dipinjam.="<ol>";

		$qry_cek_kembali=mysqli_query($conn,"select * from pengembalian_ps where id_peminjaman_ps = '".$dt_histori['id_peminjaman_ps']."'");
		if (mysqli_num_rows($qry_cek_kembali)>0) {
			$dt_kembali=mysqli_fetch_array($qry_cek_kembali);
			$denda="denda Rp. ".$dt_kembali['denda'];
			$status_kembali="<label class='alert alert-success'>Sudah kembali <br>".$denda."</label>";
			$button_kembali="";
		} else {
			$status_kembali="<label class='alert alert-danger'>Belum kembali</label>";
			$button_kembali="<a href='kembali.php?id=".$dt_histori['id_peminjaman_ps']."' class='btn btn-warning' onclick='return confirm(\"Yakin ingin kembalikan?\")'>Kembalikan</a>";
		}
		?>
		<tr>
			<td><?=$no?></td><td><?=$dt_histori['tanggal_pinjam']?></td><td><?=$dt_histori['tanggal_kembali']?></td><td><?=$ps_dipinjam?></td><td><?=$status_kembali?></td><td><?=$button_kembali?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
<?php
	include "footer.php";
?> 