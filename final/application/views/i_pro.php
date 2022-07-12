<div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">

		<div class="container">
		<div class="row">
			



		</div>
		
			<div class="card-panel ">
				<center><b>Tambah Data Baru</b></center>
			</div>
		
		 <div class="card-panel">
		    <form class="col s12" action="<?php echo base_url(). '/home/add_pro'; ?>" method="post" enctype="multipart/form-data">
		      <div class="row">
		        <div class="input-field col s6">
		          <input type="text" name="nama" class="validate">
		          <label>Nama</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="kegiatan" type="text" class="validate">
		          <label for="last_name">Kegiatan</label>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="divisi" type="text" class="validate">
		          <label>Divisi</label>
		        </div>
		       	 <div class="col s6">
		          Tanggal Kegiatan:
		          <div class="input-field inline">
		            <input type="date" class="datepicker" name="tgl">
		            
		          </div>
		        </div>
		      </div>

		     

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="catatan"></textarea>
		          <label for="textarea1">Catatan</label>
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

		  <script type="text/javascript">
		  	
		  </script>


		 