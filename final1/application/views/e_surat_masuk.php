
		<div class="container">
		<div class="row">
			



		</div>
		
			<div class="card-panel teal green lighten-5">
				<center><b>Edit Surat Masuk</b></center>
			</div>

		<?php foreach ($t_surat_masuk as $u) { ?>

		<div class="container">
		 <div class="card-panel teal blue lighten-5">
		    <form class="col s12" action="<?php echo base_url(). 'index.php/home/update'; ?>" method="post">
		      <div class="row">
		        <div class="input-field col s6">
		          <input type="hidden" name="id" value="<?php echo $u->id ?>">
		          <input type="text" name="no_agenda" class="validate" value="<?php echo $u->no_agenda ?>">
		          <label>No. Agenda</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="dari" type="text" class="validate" value="<?php echo $u->dari ?>">
		          <label for="last_name">Dari</label>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="no_surat" type="text" class="validate" value="<?php echo $u->no_surat ?>">
		          <label>Nomor Surat</label>
		        </div>
		        <div class="col s6">
		          Tanggal Surat:
		          <div class="input-field inline">
		            <input type="date" class="datepicker" name="tgl_surat" value="<?php echo $u->tgl_surat ?>">
		            
		          </div>
		        </div>
		      </div>

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="perihal" value="<?php echo $u->perihal ?>"></textarea>
		          <label for="textarea1">Perihal</label>
		        </div>

		      </div>
		     <div>
			    <div class="file-field input-field">
		      <div class="btn">
		        <span>File</span>
		        <input type="file">
		      </div>
		      <div class="file-path-wrapper">
		        <input class="file-path validate" type="text">
		      </div>
		    </div>
		     </div> 
			  <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
			    <i class="material-icons right">send</i>
			  </button>
		    </form>
			</div>
		  </div>
<?php } ?>

		 