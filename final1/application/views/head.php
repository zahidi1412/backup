<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<!--<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/materialize/css/material.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/materialize/css/materialize.min.css">
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
		
		
		  <script type="text/javascript">
		
	  $(document).ready(function() {
	    $('select').material_select();
		$('.tooltipped').tooltip({delay: 50});
		$(".dropdown-button").dropdown();
        $('.datepicker').pickadate({
	     			format: 'yyyy-mm-dd',
				    selectMonths: true, // Creates a dropdown to control month
				    selectYears: 15 // Creates a dropdown of 15 years to control year
				  });
	  });
	</script>

	 <script type="text/javascript">
				$(document).ready(function() {
			    Materialize.updateTextFields();

			  });
		  </script>
		  
		
</head>
<body bgcolor="#e3f2fd">

	<ul id="dropdown1" class="dropdown-content">
	  <li><a href="t_surat_masuk">Surat Masuk</a></li>
	  <li><a href="#!">Surat Keluar</a></li>
	  
	  
	</ul>
<div class="navbar-fixed">
 <nav>
    <div class="nav-wrapper green accent-4">
    <div class="container">
      <a href="#" class="brand-logo">Logo</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a class="dropdown-button"  data-activates="dropdown1">Persuratan</a></li>
        <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Agenda<i class="material-icons right">arrow_drop_down</i></a></li>
      </ul>
    </div>  
    </div>
  </nav>
</div>

  <div class="row"></div>
  <div class="row"></div>
  <div class="row"></div>
  <div class="row"></div>
  <div class="row"></div>