
		

		<div class="container">
		<div class="row">
			



		</div>
		
			<div class="card-panel ">
				<center><b>Tambah Data Baru</b></center>
			</div>
		
		 <div class="card-panel">
		    <form class="col s12" action="<?php echo base_url(). 'index.php/home/tambah_aksi'; ?>" method="post">
		      <div class="row">
		        <div class="input-field col s6">
		          <input type="text" name="no_agenda" class="validate">
		          <label>No. Agenda</label>
		        </div>
		        <div class="input-field col s6">
		          <input name="dari" type="text" class="validate">
		          <label for="last_name">Dari</label>
		        </div>
		      </div>
		      
		      <div class="row">
		        <div class="input-field col s6">
		          <input name="no_surat" type="text" class="validate">
		          <label>Nomor Surat</label>
		        </div>
		        <div class="col s6">
		          Tanggal Surat:
		          <div class="input-field inline">
		            <input type="date" class="datepicker" name="tgl_surat">
		            
		          </div>
		        </div>
		      </div>

			  
		      
		      <div class="row">
		        <div class="input-field col s12">
		          <textarea id="textarea1" class="materialize-textarea" name="perihal"></textarea>
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


		 