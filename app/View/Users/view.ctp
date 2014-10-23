<div class="users view">
<h2><?php echo __('Usuario'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre de usuario:'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo:'); ?></dt>
		<dd>
			<?php
				switch ($user['User']['role']) {
					case 'admin':
						echo __("Administrador");
						break;
					case 'teacher':
						echo __("Profesor");
						break;
					case 'student':
						echo __("Estudiante");
						break;
					default:
						echo __("Indefinido");
				}
			?>
			&nbsp;
		</dd>
		<dt><?php echo __('Creado:'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modificado:'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?></li>
		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']), array(), __('¿Está seguro de borrar el usuario %s?', $user['User']['username'])); ?></li>
	</ul>
</div>