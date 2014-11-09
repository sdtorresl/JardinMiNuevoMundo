<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo __("Jardín Infantil Mi Nuevo Mundo"); ?>
		</title>
		<?php
			echo $this->Html->meta('icon');
	 
			echo $this->Html->css('bootstrap.min.css');
	 		echo $this->Html->css('style.css');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');

			echo $scripts_for_layout;
		?>
	</head>

	<body>
		  
		<?php echo $this->element('navigation') ?>
	
		<div class="container">
			<?php echo $this->Session->flash(); ?>
			
			<!-- Main Content -->
			<?php echo $this->fetch('content'); ?>

		</div> <!-- /container -->

		<?php echo $this->element('sql_dump'); ?>

		<!-- Bootstrap core JavaScript -->
		<?php 
		echo $this->Html->script('https://code.jquery.com/jquery-1.10.2.min.js');
		echo $this->Html->script('bootstrap.min'); 
		?>

	</body>
</html>