<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
	</ul>
</div>
