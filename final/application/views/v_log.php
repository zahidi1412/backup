<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/materialize.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>SI Fors</title>
    </head>

    <body>

    <div class="navbar-fixed">
	 <nav>
	    <div class="nav-wrapper green accent-4">
	    <div class="container">
	    <center><b style="font-size: 25px;"></b></center>
	      
	    </div>  
	    </div>
	  </nav>
	</div>
      
 
 <div class="card-panel teal grey lighten-5" style="margin-left: 35%; margin-top: 10%; margin-right: 35%; align: center;">
 <div class="row">
 	<center><b style="font-size: 20px;">LOGIN</b></center>
 </div>
  <div class="row">
    <form class="col s6"  action="<?php echo base_url('login/log'); ?>" method="post">
      <div class="row">
        
        <div class="input-field" style="width: 210%;">
          <input id="last_name" type="text" class="validate" name="username">
          <label for="last_name">Username</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field" style="width: 210%;">
          <input id="password" type="password" class="validate" name="password">
          <label for="password">Password</label>
        </div>
      </div>
      
      <div class="row">
      	<center>
      	<input type="submit" value="Login" class="waves-effect waves-light btn">
      	</center>
      </div>
    </form>
  </div>
 </div> 
      

     
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
      <script type="text/javascript">
      	 $(document).ready(function() {
		    Materialize.updateTextFields();
		  });
      </script>
    </body>
  </html>


