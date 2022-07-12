<!DOCTYPE html>
<html>
<head>
	<title>SI FORS</title>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>aset/materialize/css/material.css">
	 <link rel="stylesheet" href="<?php echo base_url(); ?>aset/UI/css/uikit.min.css" />
	 <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/materialize.css"  media="screen,projection"/>
        <script src="<?php echo base_url(); ?>aset/UI/js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>aset/UI/js/uikit.min.js"></script>
        <script src="<?php echo base_url(); ?>aset/UI/js/uikit-icons.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
	      <script type="text/javascript">
	         $(document).ready(function() {
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

	<nav class="uk-navbar-container" uk-navbar>
    <div class="uk-navbar-left">

        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="#">SI Organisasi</a></li>
           
            <li><a href="#">Item</a></li>
        </ul>

    </div>
</nav>

<br>
<br>

	<div class="uk-grid-match uk-grid-small uk-text-left" uk-grid>
   
    <div class="uk-width-auto@m">
        <div class="uk-card uk-card-default uk-card-body">
        	
			   <div class=" uk-align-left">
				    <ul class="uk-nav-default uk-nav-parent-icon uk-align-left" uk-nav>
				       
				        <li class="uk-nav-header">Admin</li>
				        <li class="uk-nav-divider"></li>
				        <li><a href="<?php echo base_url('home/anggota'); ?>"><span class="uk-margin-small-right" uk-icon="icon: users"></span>Anggota</a></li>
				        <li class="uk-nav-divider"></li>
				        <li><a href="<?php echo base_url('home/pengurus'); ?>"><span class="uk-margin-small-right" uk-icon="icon: user"></span>Pengurus</a></li>
				        <li class="uk-nav-divider"></li>
				        <li><a href="<?php echo base_url('home/pembina'); ?>"><span class="uk-margin-small-right" uk-icon="icon: user"></span>Pembina</a></li>
				        <li class="uk-nav-divider"></li>
				        <li><a href="<?php echo base_url('home/proker'); ?>"><span class="uk-margin-small-right" uk-icon="icon: social"></span>Proker</a></li>	
				        <li class="uk-nav-divider"></li>
				        <li><a href="<?php echo base_url('login/logout'); ?>"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span>Logout</a></li>
				    </ul>
				</div>
			
        </div>
    </div>
   
	