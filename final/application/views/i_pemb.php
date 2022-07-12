<div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">
		

		
		<div class="container">
		<div class="row">
			



		</div>
		
			<div class="card-panel ">
				<center><b>Tambah Data Baru</b></center>
			</div>
		
		 <div class="card-panel">
		    <form class="col s12" action="<?php echo base_url(). '/home/add_pemb'; ?>" method="post" enctype="multipart/form-data">
		      <div class="row">
		        <div class="input-field col s6">
		          <input type="text" name="nama" class="validate">
		          <label>Nama</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="no_hp" type="text" class="validate">
		          <label>Nomor HP</label>
		        </div>
		      </div>
		      
		     
		     

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="alamat"></textarea>
		          <label for="textarea1">Alamat</label>
		        </div>

		      </div>
		      
			  <button class="btn waves-effect waves-light" type="submit" name="action">Simpan
			    <i class="material-icons right">send</i>
			  </button>
		    </form>
			</div>
		  </div>


</div>
</div>	 