<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Role'); ?></dt>
		<dd>
			<?php echo h($user['User']['role']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
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