  <center>
    <h1>Lembar Disposisi</h1>
  </center>
  <?php foreach ($t_surat_masuk as $u) { ?>
    
  
  <form action="<?php echo base_url(). 'home/v_all'; ?>" method="post" class="form-inline">
 <head>
<style type="text/css" media="print">
  table {border: solid 1px #000; border-collapse: collapse; width: 100%}
  tr { border: solid 1px #000}
  td { padding: 7px 5px}
  h3 { margin-bottom: -17px }
  h2 { margin-bottom: 0px }
</style>
<style type="text/css" media="screen">
  table {border: solid 1px #000; border-collapse: collapse; width: 60%}
  tr { border: solid 1px #000}
  td { padding: 7px 5px}
  h3 { margin-bottom: -17px }
  h2 { margin-bottom: 0px }
</style>
</head>

<body onload="window.print()">
<table class="table table-striped">
  <tbody><tr><td colspan="3" align="center">
  <h2>KANTOR KEMENTRIAN AGAMA KOTA MALANG</h2>
  <h3></h3>
  Alamat : Jl. Raden Panji Suroso No.2  
  </td>
  </tr>
  
  <tr><td colspan="3" style="padding: 15px 0" align="center"><b style="font-size: 21px;">LEMBAR DISPOSISI</b></td></tr>
  <tr>
    <td width="55%">Nomor Surat :<?php echo $u->no_surat ?></td>
    <td width="40%"><b>Status :<?php echo $u->status ?></b> </td>
  </tr>
  <tr>
    <td width="50%">Tanggal Surat :<?php echo $u->tgl_surat ?></td>
    <td width="50%"><b>Sifat :<?php echo $u->sifat ?></b> </td>
  </tr>
  <tr>
    <td colspan="2"><b>Asal Surat : </b><?php echo $u->dari ?></td>
  </tr>

  <tr><td colspan="2"><b>Perihal : </b><?php echo $u->perihal ?> </td></tr>
  
  
  <tr><td style="height: 250px"  width="50%" valign="top"><b>disposisi Kepala Kepada : </br><?php echo $u->disposisi_kepala ?></b> <br><br>

 <td style="border-left: solid 1px" width="50%" valign="top">
  Disposisi Kasubag Kepada  : <?php echo $u->disposisi_kasubag ?> 
  
  </td>
  
  </tr>

   <tr><td style="height: 250px"  width="50%" valign="top"><b>Catatan Kepala : </br><?php echo $u->catatan_kepala ?></b> <br><br>

 <td style="border-left: solid 1px" width="50%" valign="top">
  Catatan Kasubag  : <?php echo $u->catatan_kasubag ?> 
  
  </td>
  
  </tr>
  
</tbody>
</table>


</body>
  
  
  </form> 

  <?php } ?>