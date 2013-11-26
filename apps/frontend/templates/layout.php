<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
  </head>
  <body>
  	<div class="navbar navbar-fixed-top navbar-inverse">
	  <div class="container">
	  <div class="collapse navbar-collapse">
	  <?php include_partial('global/menu');?>
	  </div>
	  </div>
  	</div>
  	<div class="container body">
	  	<div class="jumbotron">
	  		<div class="logo"></div>
	  		<div class="text">
		  		<h1>COOPEUD</h1>
		  		<p>Sistema de gestion de eventos cooperativa de empleados Universidad Distrital</p>
	  		</div>
	  	</div>
    	<?php echo $sf_content ?>
    </div>
  </body>
</html>
