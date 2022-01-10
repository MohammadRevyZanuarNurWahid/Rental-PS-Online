<?php
include "header.php";
?>
<h2>Daftar Playstation di Keranjang</h2>
<table class="table table-hover striped">
	<thead>
		<tr>
			<td>NO</td><<td>NAMA PLAYSTATION</td><td>JUMLAH</td><td>AKSI</td> 
		</tr>
	</thead>
	<tbody>
		<?php
		foreach (@$_SESSION['cart'] as $key_produk => $val_produk): ?> 
			<tr>
				<td><?=($key_produk+1)?></td><td><?=$val_produk['nama_ps']?></td><td><?=$val_produk['qty']?></td><td><a href="hapus_cart.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>X</strong></a></td>
			</tr>

		<?php endforeach ?>
	</tbody>
</table>
<a href="checkout.php" class="btn btn-primary">Check Out</a>
<?php
	include "footer.php";	
?>