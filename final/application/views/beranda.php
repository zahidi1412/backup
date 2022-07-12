<!DOCTYPE html>
<html>
<head>
  <title>SI FORS</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/materialize/css/material.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>aset/UI/css/uikit.min.css" />
   <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/materialize.css"  media="screen,projection"/>
        <script src="<?php echo base_url(); ?>aset/UI/js/jquery.js"></script>
         <script src="<?php echo base_url(); ?>aset/UI/js/uikit-icons.min.js"></script>
         <script src="<?php echo base_url(); ?>aset/UI/js/uikit.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
        <script type="text/javascript">
           $(document).ready(function() {
               $('.parallax').parallax();
                $('.slider').slider({
                  height: 700,
                  indicators: false
                });
              Materialize.updateTextFields();
              $('.tooltipped').tooltip({delay: 50});
              $('select').material_select();
              $(".dropdown-button").dropdown();
              $('.datepicker').pickadate({
              format: 'yy-mm-dd',
              selectMonths: true, // Creates a dropdown to control month
              selectYears: 15 // Creates a dropdown of 15 years to control year
              });
            });
        </script>

</head>
<body>
<header>
<div class="navbar-fixed">
  <nav class="blue" style="color: white;">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Organisasi X</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
      
        <li><a href="<?php echo base_url('Login'); ?>">Login</a></li>
      </ul>
    </div>
  </nav>
  </div>
 
</header>

<main>
  
<!--  Parallax Section  -->
  <div class="slider">
    <ul class="slides">
      <li>
        <img src="<?php echo base_url(); ?>aset/gam/a.JPG"> <!-- random image -->
        <div class="caption center-align">
          <h3>gambar 1</h3>
          <h5 class="light grey-text text-lighten-3">ini hanyalah gambar ilustrasi</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>aset/gam/b.JPG"> <!-- random image -->
        <div class="caption left-align">
          <h3>gambar 2</h3>
          <h5 class="light grey-text text-lighten-3">gambar ilustrasi juga</h5>
        </div>
      </li>
      <li>
        <img src="<?php echo base_url(); ?>aset/gam/c.JPG"> <!-- random image -->
        <div class="caption right-align">
          <h3>gambar 3</h3>
          <h5 class="light grey-text text-lighten-3">lagi lagi ilustrasi</h5>
        </div>
      </li>
      
    </ul>
  </div>
    <div class="section grey" style="height: 500px;">
      <div class="row container">
        <center><h2 class="white-text">Tentang</h2></center>
      <div class="col s6">
       
         <p class="white-text" align="justify">Organisasi x merupakan oragnisasi yang entah belum diketahui siapa pemiliknya dan ini hanyalah sebagai contoh untuk memenuhi tugas matakuliah pemrograman web. <br>aplikasi ini berisi tabel untuk melihat data-data  termasuk untuk memanjemen data tentang oraganisasi seperti anggota, pengurus ,program kerja dan alumni.  </p>

      </div>
       <div class="col s6">
         <p class="white-text" align="justify">Organisasi x merupakan oragnisasi yang entah belum diketahui siapa pemiliknya dan ini hanyalah sebagai contoh untuk memenuhi tugas matakuliah pemrograman web. <br>aplikasi ini berisi tabel untuk melihat data-data  termasuk untuk memanjemen data tentang oraganisasi seperti anggota, pengurus ,program kerja dan alumni.  </p>
       </div>
        
      </div>
    </div>

</main>

<footer class="page-footer blue accent-">
  <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Contacts</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!"><i class="material-icons">google</i></a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2017 Zahidi
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
</footer>
 

  
</body>
</html>


