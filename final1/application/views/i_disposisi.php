
	
			



		
			

	<?php foreach ($t_surat_masuk as $u) { ?>

	
	<div class="container">
		<div class="card-panel teal green lighten-5">
				<center><b>Disposisi Surat Masuk</b></center>
			</div>	

		<div class="card-panel blue lighten-5">
		<form action="<?php echo base_url(). 'index.php/home/dispos'; ?>" method="post" class="form-inline">
		      <div class="row">

		        <div class="input-field col s6">
		           <input type="hidden" name="id" value="<?php echo $u->id ?>">
		          <select name="sifat">
				      <option value="disabled selected"> - Sifat - </option>
				      <option value="Sangat Segera">Sangat Segera</option>
				      <option value="Segera">Segera</option>
				      <option value="Biasa">Biasa</option>
				    </select>
				    <label>Sifat</label>
		        </div>

		        <div class="input-field col s6">
		          	<select name="status">
				      <option value="disabled selected"> - Status - </option>
				      <option value="Asli">Asli</option>
				      <option value="Tembusan">Tembusan</option>
				      
				    </select>
				    <label>Status</label>
		        </div>
		      </div>
		      	
		      <div class="row">
		        <div class="input-field col s6">
		          	<select name="disposisi_kepala">
					<option selected="" value=""> - Disposisi Ke - </option>
					<option value="Kasubag TU">Kasubag TU</option>
					<option value="Perencana">Perencana</option>
					<option value="Kepegawaian">Kepegawaian</option>
					<option value="Keuangan dan BMN">Keuangan dan BMN</option>
					<option value="Pendma">Pendma</option>
					<option value="Bimas Islam">Bimas Islam</option>
					<option value="Pengawas PAI">Pengawas PAI</option>
					<option value="Pengawas Non PAI">Pengawas Non PAI</option>
					<option value="PHU/Haji">PHU/Haji</option>
					<option value="ULP">ULP</option>
					<option value="Binsyar">Binsyar</option>
					<option value="Humas">Humas</option>
					<option value="PAIS">PAIS</option>
					<option value="PD Pontren">PD Pontren</option>			
					</select>
		          <label>Disposisi Kepala Kepada</label>
		        </div>

		        <div class="input-field col s6">
		          	<select name="disposisi_kasubag">
					<option selected="" value=""> - Disposisi Ke - </option>
					<option value="Kasubag TU">Kasubag TU</option>
					<option value="Perencana">Perencana</option>
					<option value="Kepegawaian">Kepegawaian</option>
					<option value="Keuangan dan BMN">Keuangan dan BMN</option>
					<option value="Pendma">Pendma</option>
					<option value="Bimas Islam">Bimas Islam</option>
					<option value="Pengawas PAI">Pengawas PAI</option>
					<option value="Pengawas Non PAI">Pengawas Non PAI</option>
					<option value="PHU/Haji">PHU/Haji</option>
					<option value="ULP">ULP</option>
					<option value="Binsyar">Binsyar</option>
					<option value="Humas">Humas</option>
					<option value="PAIS">PAIS</option>
					<option value="PD Pontren">PD Pontren</option>			
					</select>
		          <label>Disposisi Kasubag Kepada</label>
		          
		        </div>
		      </div>
		      
		      
		      	<button class="btn waves-effect waves-light" type="submit" name="action">Simpan</button>
		    </form>
		    </div>
	</div>

<?php } ?>