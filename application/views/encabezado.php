<?php
/*
	Pequeño, muy pequeño sistema de ventas en PHP con MySQL

	@author parzibyte

	No olvides visitar parzibyte.me/blog para más cosas como esta
*/
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ventas</title>
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/fontawesome-all.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/2.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/estilo.css">
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo base_url(); ?>">POS</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li><a href=" <?php echo base_url(); ?>index.php/productos/">Productos</a></li>
					<li><a href=" <?php echo base_url(); ?>index.php/vender/">Vender</a></li>
					<li><a href=" <?php echo base_url(); ?>index.php/ventas/">Ventas</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container">
		<div class="row">