<div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
<div class="container">
		<div class="row">
			



		</div>
		
			<div class="card-panel teal green lighten-5">
				<center><b>Edit Surat Masuk</b></center>
			</div>

		<?php foreach ($pengurus as $u) { ?>

		<div class="container">
		 <div class="card-panel teal blue lighten-5">
		    <form class="col s12" action="<?php echo base_url(). 'index.php/home/update_pengu'; ?>" method="post">
		      <div class="row">
		        <div class="input-field col s6">
		          <input type="hidden" name="id" value="<?php echo $u->id ?>">
		          <input type="text" name="nama" class="validate" value="<?php echo $u->nama ?>">
		          <label>Nama</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="jurusan" type="text" class="validate" value="<?php echo $u->jurusan ?>">
		          <label for="last_name">Jurusan</label>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="no_shp" type="text" class="validate" value="<?php echo $u->no_hp ?>">
		          <label>Nomor HP</label>
		        </div>
		       <div class="input-field col s6">
		          <input name="no_shp" type="text" class="validate" value="<?php echo $u->divisi ?>">
		          <label>Divisi</label>
		        </div>
		        
		        
		      </div>
		      
		      

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="alamat" value="<?php echo $u->alamat ?>"></textarea>
		          <label for="textarea1">Alamat</label>
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