<!-- app/View/Users/edit.ctp -->
<div class="col-md-3">
	<div class="lateral-menu">
		<div class="actions">
			<h3><?php echo __('Acciones'); ?></h3>
			<ul class="nav nav-pills nav-stacked">
			<?php if ($user['User']['role'] == 'admin'): ?>
				<li>
					<?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
				</li>
			<?php else: ?>
				<li><?php echo $this->Html->link(__('Instrucciones'), array('action' => 'index', 'controller' => 'students')); ?></li>
				<li><?php echo $this->Html->link(__('Regresar al inicio'), 'http://jardinminuevomundo.com'); ?>
				</li>
				<li>
					<?php echo $this->Html->link(__('Cambiar contraseña'), array('action' => 'edit', $user['User']['id'])); ?>
				</li>
			<?php endif ?>
			</ul>
		</div>
	</div>
</div>

<div class="col-md-9">	
	<div class="title">
		<span class="bg-title"></span>
		<h1><span>Mi perfil de</span> Usuario</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">

		<?php echo $this->Session->flash(); ?>
		<div class="users view">

			<br>
			<br>
			<div class="table-responsive">
				
				<table class="table table-bordered">
					<tr>
						<th><?php echo __('ID'); ?></th>
						<th><?php echo __('Nombre de usuario'); ?></th>
						<th><?php echo __('Tipo'); ?></th>
						<th><?php echo __('Correo Electrónico'); ?></th>
						<th><?php echo __('Código de Registro'); ?></th>
						<th><?php echo __('Creado'); ?></th>
						<th><?php echo __('Modificado'); ?></th>
					</tr>

					<tr>
						<!-- ID -->
						<td><?php echo h($user['User']['id']); ?></td>
						<!-- Username -->
						<td><?php echo h($user['User']['username']); ?></td>
						<!-- Role -->
						<td>
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
						</td>
						<!-- Email -->
						<td><?php echo h($user['User']['email']); ?></td>
						<!-- Register code -->
						<td>
							<?php
							if ($user['User']['role'] == 'student'):
								echo h($user['User']['register_code']);
							else:
								echo "No aplica";
							endif;
							?>
						</td>
						<!-- Created date -->
						<td><?php echo h($user['User']['created']); ?></td>
						<!-- Modified date -->
						<td><?php echo h($user['User']['modified']); ?></td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>