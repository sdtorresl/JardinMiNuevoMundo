<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Editar Usuario'); ?></legend>
	<?php
		echo $this->Form->input('username', array('label' => 'Nombre de Usuario'));
		echo $this->Form->input('password', array('label' => 'Contraseña'));
		echo $this->Form->input('email', array('label' => 'Correo electrónico'));
		echo $this->Form->select('role', array('admin' => 'Administrador', 'student' => 'Estudiante', 'teacher' => 'Profesor'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('¿Está seguro que desea borrar el usuario %s?', $this->Form->value('User.username'))); ?></li>
	</ul>
</div>
