<?php
	include "header.php";
?>
<h3>Daftar Playstation</h3>
<div class="row">
	<?php
	include "koneksi.php";
	$qry_ps=mysqli_query($conn, "select * from ps");
	while ($dt_ps=mysqli_fetch_array($qry_ps)) {
	?>
	<div class="col-md-3">
		<div class="card">
			<img src="image/ps2.jpg" class="card-img-top">
			<img src="image/ps3.jpg" class="card-img-mid">
			<img src="image/ps4.jpg" class="card-img-top">
			<img src="image/ps5.jpg" class="card-img-top">
			<div class="card-body">
				<h5 class="card-tittle"><?=$dt_ps['nama_ps']?></h5>
				<p class="card-text"><?=substr($dt_ps['deskripsi'], 0,20)?></p>
				<a href="pinjam.php?id_ps=<?=$dt_ps['id_ps']?>" class="btn btn-primary">Sewa</a>
			</div>
		</div>
	</div>
	<?php
	}
	?>
</div>
<?php
	include "footer.php";
?>