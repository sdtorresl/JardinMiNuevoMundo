<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Agregar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Nombre de Usuario'));
		echo $this->Form->input('password', array('label' => 'Contraseña'));
		echo $this->Form->input('email', array('label' => 'Correo electrónico'));
		echo $this->Form->select('role', array('administrator' => 'Administrador', 'student' => 'Estudiante', 'teacher' => 'Profesor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Estudiantes'), array('action' => 'list_students')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Profesores'), array('action' => 'list_teachers')); ?></li>
		<li><?php echo $this->Html->link(__('Listar Administradores'), array('action' => 'list_managers')); ?></li>
	</ul>
</div>
