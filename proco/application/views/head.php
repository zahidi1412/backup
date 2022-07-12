 <!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="<?php echo base_url(); ?>aset/materialize/css/material.css">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>aset/materialize/css/materialize.css"  media="screen,projection"/>
      <link href="<?php echo base_url(); ?>aset/Materi/css/materialdesignicons.min.css" media="all" rel="stylesheet" type="text/css" />
     
     

     
       <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/jquery.js"></script>
      <script type="text/javascript" src="<?php echo base_url(); ?>aset/materialize/js/materialize.min.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){

          $('.parallax').parallax();
          $('.slider').slider({
                 
                });

        });
      </script>
      <script type="text/javascript">
      $(document).on('scroll', function (e) { updateColor(); });

function updateColor() {
  var o = $(document).scrollTop() / 500;
    if (o > 1.000) { o = 1; }
    var e = $('nav');
    var currentColor = e.css('background-color');
    var rgb = currentColor.replace(/^(rgb|rgba)\(/, '').replace(/\)$/, '').replace(/\s/g, '').split(',');
    var newColor = 'rgba(' + rgb[0] + ',' + rgb[1] + ',' + rgb[2] + ',' + o + ')';
    e.attr('style', 'background-color: ' + newColor + ' !important');
}

updateColor();
      </script>
         
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
 
    <div class="navbar-fixed" id="top">
        <!--***Current Color for Opaque Navbar: class="orange"***-->
        <nav class="blue">
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
            <a class="brand-logo left-align">Header</a>
            <ul class="right hide-on-med-and-down">
                <li><a class="waves-effect waves-light" id="test">Item 1</a></li>
                <li><a class="waves-effect waves-light">Item 2</a></li>
                <li><a class="waves-effect waves-light">Item 3</a></li>
                <li><a class="waves-effect waves-light">Item 4</a></li>
            </ul>
            <ul class="side-nav left-align" id="mobile-demo">
                <li class="waves-effect waves-red" style="width: 100%;"><a>Item 1</a></li>
                <li class="waves-effect waves-red" style="width: 100%;"><a>Item 2</a></li>
                <li class="waves-effect waves-red" style="width: 100%;"><a>Item 3</a></li>
                <li class="waves-effect waves-red" style="width: 100%;"><a>Item 4</a></li>
            </ul>
        </nav>
    </div>

