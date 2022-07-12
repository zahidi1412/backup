<div class="uk-width-expand@m">
        <div class="uk-card uk-card-default uk-card-body">

<div class="container">
  <div class="card-panel">
      <center><b><?php echo anchor('home/tambah_pengu','Tambah Data'); ?></b></center>    
  </div>
 <div class="card-panel ">
<table class="responsive-table highlight">
    <thead>
      <tr>
      <th width="2%">No</th>
      <th width="5%">Nama Pengurus</th>
      <th width="17%">Alamat </th>
      <th width="18%">Jurusan</th>
      <th width="23%">No HP</th>
      <th width="12%">Divisi</th>
      <th width="25%%">Aksi</th>
      <tr>
    </thead>
    <tbody>
    <?php 
      $no = $this->uri->segment('3') + 1;
      foreach ($pengurus as $q) { 
    ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $q->nama ?></td>
        <td><?php echo $q->alamat ?></td>
        <td><?php echo $q->jurusan ?></td>
        <td><?php echo $q->no_hp ?></td>
        <td><?php echo $q->divisi ?></td>
        <td>
        	
		    
		       <a href="<?php echo base_URL()?>index.php/home/edit_pengu/<?php echo $q->id ?>" class="btn-floating yellow btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit" ><i class="material-icons">edit</i></a>
		        
		        
		        <a href="<?php echo base_URL()?>index.php/home/hapus_pengu/<?php echo $q->id ?>" class="btn-floating red btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a>
           
          
        </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    <?php
    echo $this->pagination->create_links();
    ?>
    </div>
    </div>

    </div>
    </div>

     </div>
      <div class="fixed-action-btn">
        <a id="menu" class="btn-floating btn-large blue">
          <i class="large material-icons">add</i>
        </a>
        <ul>
          <li><a href="<?php echo base_url('home/tambah_pro'); ?>" class="btn-floating red tooltipped" data-position="left" data-delay="50" data-tooltip="Tambah Data Proker"><i class="material-icons">insert_chart</i></a></li>
          <li><a href="<?php echo base_url('home/tambah_pemb'); ?>" class="btn-floating yellow tooltipped" data-position="left" data-delay="50" data-tooltip="Tambah Data Pembina"><i class="material-icons">format_quote</i></a></li>
          <li><a href="<?php echo base_url('home/tambah_pengu'); ?>" class="btn-floating green tooltipped" data-position="left" data-delay="50" data-tooltip="Tambah Data Pengurus"><i class="material-icons">publish</i></a></li>
          <li><a href="<?php echo base_url('home/tambah_angg'); ?>" class="btn-floating cyan tooltipped" data-position="left" data-delay="50" data-tooltip="Tambah Data Anggota"><i class="material-icons">attach_file</i></a></li>
        </ul>
      </div>
    </div>
</div>
</div>