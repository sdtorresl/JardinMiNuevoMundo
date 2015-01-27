<div class="col-md-3">
	<div class="lateral-menu">
		<ul class="nav nav-pills nav-stacked">
			<li><?php echo $this->Html->link(__('Agregar usuario'), array('action' => 'add')) ?></li>
			<li><?php echo $this->Html->link(__('Listar estudiantes'), array('action' => 'list_students')) ?></li>
			<li><?php echo $this->Html->link(__('Listar profesores'), array('action' => 'list_teachers')) ?></li>
			<li><?php echo $this->Html->link(__('Listar usuarios'), array('action' => 'list_users')) ?></li>
			<li><?php echo $this->Html->link(__('Regresar al inicio'), array('action' => 'admin')) ?></li>
		</ul>
	</div>
</div>

<div class="col-md-9">	
	<div class="title">
		<span class="bg-title"></span>
		<h1><span>Bienvenido a tu portal</span> Administrador</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
		<div class="users admin">
			Para empezar seleccione algunas de las opciones en el menú superior.
		</div>
	</div>
</div>
