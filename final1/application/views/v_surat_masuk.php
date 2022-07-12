 v

<div class="container">
  <div class="card-panel">
      <center><b><?php echo anchor('home/tambah','Tambah Data'); ?></b></center>    
  </div>
 <div class="card-panel ">
<table class="responsive-table highlight">
    <thead>
      <tr>
      <th width="5%">No Agenda</th>
      <th width="17%">No Surat </th>
      <th width="18%">Dari</th>
      <th width="23%">Perihal</th>
      <th width="12%">Tanggal Surat</th>
      <th width="25%%">Aksi</th>
      <tr>
    </thead>
    <tbody>
    <?php 
      $no = 1;
      foreach ($t_surat_masuk as $q) { 
    ?>
      <tr>
        <td><?php echo $q->no_agenda ?></td>
        <td><?php echo $q->no_surat ?></td>
        <td><?php echo $q->dari ?></td>
        <td><?php echo $q->perihal ?></td>
        <td><?php echo $q->tgl_surat ?></td>
        <td>
        	
		    
		        <a href="<?php echo base_URL()?>index.php/home/edit_disp/<?php echo $q->id ?>" class="btn-floating yellow btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Edit" ><i class="material-icons">edit</i></a>
		        <a href="<?php echo base_URL()?>index.php/home/v_disp/<?php echo $q->id ?>" class="btn-floating blue btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Lihat Disposisi"><i class="material-icons">assignment</i></a>
		        <a href="<?php echo base_URL()?>index.php/home/e_dispos/<?php echo $q->id ?>" class="btn-floating green btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Disposisi"><i class="material-icons">attach_file</i></a>
		        <a href="<?php echo base_URL()?>index.php/home/Hapus/<?php echo $q->id ?>" class="btn-floating red btn tooltipped" data-position="bottom" data-delay="50" data-tooltip="Hapus"><i class="material-icons">delete</i></a>
           
          
        </td>
      </tr>
    <?php } ?>
    </tbody>
    </table>
    </div>
    </div>