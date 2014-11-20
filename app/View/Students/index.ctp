<div class="col-md-3">
	<div class="lateral-menu">
		<h3>Acciones</h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php echo $this->Html->link(__('Mi registro'), array('action' => 'register')); ?> </li>
			<li><?php echo $this->Html->link(__('Regresar al inicio'), 'http://jardinminuevomundo.com'); ?></li>
		</ul>
	</div>
</div>

<div class="col-md-9">	
	<div class="title">
		<span class="bg-title"></span>
		<h1><span>Pasos para la</span> Inscripción</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
		<?php echo $this->Session->flash(); ?>
		<div class="students">
			<ol>
				<li>Haga click en el enlace 'Mi registro' que aparece en la parte izquierda de la pantalla.</li>
				<li>Por favor complete todos los campos con la información presentada.</li>
				<li>Verifique que todos los campos se han completado y que la información proporcionada es correcta.</li>
				<li>Haga click en 'Guardar' para ingresar los datos al sistema.</li>
				<li>Revise que aparece el mensaje que indica que el registro fue completado satisfactoriamente, de lo contrario revise nuevamente que la información se encuentre completa y sin errores y reintente nuevamente.</li>
				<li>Haga click en el botón 'Imprimir' del menú izquierdo para generar la versión impresa del formulario de inscripción.</li>
				<li>Cuando finalice, haga click en el nombre de usuario que aparece en la parte superior de la pantalla y a continuación haga click en Cerrar Sesión.</li>
			</ol>
		</div>
	</div>
</div>