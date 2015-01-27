<!DOCTYPE html>
<html>
	<head>
		<?php echo $this->Html->charset(); ?>

	 	<link rel="stylesheet" type="text/css" href="<?php echo APP.'webroot'.DS.'css'.DS.'pdf.css'; ?>" media="all" /> 
	</head>

	<body>	  
		<div class="container">
			<?php echo $this->fetch('content'); ?>
		</div>
	</body>
</html>