<div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">

		
			


<div class="container">
		<div class="row">
			



		</div>
		
			<div class="card-panel teal green lighten-5">
				<center><b>Edit Surat Masuk</b></center>
			</div>

		<?php foreach ($proker as $u) { ?>

		<div class="container">
		 <div class="card-panel teal blue lighten-5">
		    <form class="col s12" action="<?php echo base_url(). 'index.php/home/update_pro'; ?>" method="post">
		      <div class="row">
		        <div class="input-field col s6">
		          <input type="hidden" name="id" value="<?php echo $u->id ?>">
		          <input type="text" name="nama" class="validate" value="<?php echo $u->nama ?>">
		          <label>Nama</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="kegiatan" type="text" class="validate" value="<?php echo $u->kegiatan ?>">
		          <label for="last_name">Kegiatan</label>
		        </div>
		      </div>
		      
		      <div class="row">
		         <div class="col s6">
		          Tanggal kegiatan:
		          <div class="input-field inline">
		            <input type="date" class="datepicker" name="tgl" value="<?php echo $u->tgl ?>">
		            
		          </div>
		          </div>
		       <div class="input-field col s6">
		          <input name="divisi" type="text" class="validate" value="<?php echo $u->divisi ?>">
		          <label>Divisi</label>
		        </div>
		        
		        
		      </div>
		      
		      

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="catatan" value="<?php echo $u->catatan ?>"></textarea>
		          <label for="textarea1">Catatan</label>
		        </div>

		      </div>
		      
			  <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
			    <i class="material-icons right">send</i>
			  </button>
		    </form>
			</div>
		  </div>
<?php } ?>

			</div>
		  </div>

		

		 



