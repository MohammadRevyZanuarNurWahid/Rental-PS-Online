<?php
	include "header.php";
	include "koneksi.php";
	$qry_detail_ps=mysqli_query($conn, "select * from ps where id_ps = '".$_GET['id_ps']."'");
	$dt_ps=mysqli_fetch_array($qry_detail_ps);
?>
	<h2>Sewa Playstation</h2>
	<div class="row">
		<div class="col-md-4">
			<img src="ps2.jpg" class="card-img-top">
		</div>
		<div class="col-md-8">
			<form action="masukkankeranjang.php?id_ps=<?=$dt_ps['id_ps']?>" method="POST">
				<table class="table table-hover table striped">
					<thead>
						<tr>
							<td>Nama Playstation</td>
							<td><?=$dt_ps['nama_ps']?></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td><?=$dt_ps['deskripsi']?></td>
						</tr>
						<tr>
							<td>Jumlah pinjam</td>
							<td><input type="number" name="pinjam_ps" value="1"></td>
						</tr>
						<tr>
							<td colspan="2"><input class="btn btn-success" type="submit" value="SEWA"></td>
						</tr>
					</thead>
				</table>
			</form>
		</div>
	</div>
<?php
include "footer.php";
?>