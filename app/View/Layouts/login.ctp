<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>
		<title>
			<?php echo __("Jardín Infantil Mi Nuevo Mundo"); ?>
		</title>
		<?php
			echo $this->Html->meta('icon', '/img/favicon.ico');
			echo $this->Html->meta('description', 'Plataforma académica del Jardín Infantil Mi Nuevo Mundo');
	 
			echo $this->Html->css('bootstrap.min.css');
	 		echo $this->Html->css('style.css');

			echo $this->fetch('meta');
			echo $this->fetch('css');
			echo $this->fetch('script');

			echo $this->Html->script('https://code.jquery.com/jquery-1.10.2.min.js');
			
			echo $scripts_for_layout;
		?>
	</head>

	<body style="padding-top: 0px;">
		<header class="login">
			<div class="logo-login-container">
				<?php echo $this->Html->image('logo-login.png', $options = array('id' => 'logo-login')); ?>
				<p>CREA - Composición Estratégica. Todos los derechos reservados.</p>
			</div>
		</header>	

		<article class="container container-login">
			<?php echo $this->Session->flash(); ?>
			
			<!-- Main Content -->
			<?php echo $this->fetch('content'); ?>

		</article>

		<footer>
			<div class="col-sm-9 ">
				Plataforma diseñada por el equipo profesional de la empresa CREA. Dedicada al diseño estratégico de productos y servicios. Copyright 2014.
			</div>
		</footer>

		<?php echo $this->element('sql_dump'); ?>

		<!-- Bootstrap core JavaScript -->
		<?php 
		echo $this->Html->script('bootstrap.min'); 
		?>
	</body>

</html>