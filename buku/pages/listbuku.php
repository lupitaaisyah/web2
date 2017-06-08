<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Penulis</th>
		</tr>
	</thead>
	<tbody>
 <?php foreach ($isi_buku as $ib) { ?>
		<tr>
			
			<td><?= $ib['id_buku'] ?></td>
			<td><?= $ib['judul'] ?></td>
			<td><?= $ib ['penulis'] ?></td>
		</tr>
		<?php } ?>
	</tbody>
</table>
