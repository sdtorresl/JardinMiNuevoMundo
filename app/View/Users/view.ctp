<!-- app/View/Users/edit.ctp -->
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
		<h1><span>Ver</span> Usuario</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
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