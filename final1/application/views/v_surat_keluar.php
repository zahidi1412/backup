
<div class="container">
	<div class="card-panel">
		<center><b><?php echo anchor('home/tambah_keluar','Tambah Data'); ?></b></center>
	</div>
	<div class="card-panel">
		<table class="responsive-table highlight">
			<thead>
				<tr>
					<th width="5%">No Agenda</th>
					<th width="35%">Perihal</th>
					<th width="30%">Tujuan</th>
					<th width="10%">Tanggal surat</th>
					<th width="20%%">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no=1;
				foreach ($t_surat_keluar as $q) {
				?>
				<tr>
					<td><?php echo $q->no_agenda ?></td>
			        <td><?php echo $q->isi_ringkas ?></td>
			        <td><?php echo $q->tujuan ?></td>
			        
			        <td><?php echo $q->tgl_surat ?></td>
			        <td>
			        	
			        </td>
				</tr>	
				<?php }?>						
			</tbody>
		</table>
	</div>
</div>