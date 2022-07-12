

<div class="container">
	<div class="card-panel teal green lighten-5">
		<center><b>Tambah Data Baru</b></center>
		
	</div>

	<div class="card-panel">
		<form class="col s12" action="<?php echo base_url(). 'index.php/home/tambah_skeluar'; ?>" method="POST">
			<div class="row">
				<div class="input-field col s6">
					<input type="text" name="no_agenda" class="validate">
					<label>No Agenda</label>
				</div>
				
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input type="text" name="tujuan" class="validate">
					<label>Tujuan</label>
				</div>
				<div class="input-field col s6">
					<input type="text" name="no_surat" class="validate">
					<label>No.Surat</label>
				</div>
			</div>
			<div class="row">
				<div class="col s6">
	            	<input type="date" class="datepicker" name="tgl_surat">
	            </div>
			</div>
			<div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="isi_ringkas"></textarea>
		          <label for="textarea1">Perihal</label>
		        </div>
	            
			</div>
			<button class="btn waves-effect waves-light" type="submit" name="action">Simpan
			    <i class="material-icons right">send</i>
			  </button>
		</form>
	</div>

</div>