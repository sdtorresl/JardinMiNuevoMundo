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
		<h1><span>Lista de</span> Estudiantes</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
		<div class="users index">
			<br>
			<br>
			<div class="panel panel-default">
  				<!-- Default panel contents -->
  				<div class="table-responsive">
  					
					<table cellpadding="0" cellspacing="0" class="table table-bordered table-hover">
						<thead>
							<tr>
								<th><?php echo $this->Paginator->sort('id'); ?></th>
								<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
								<th><?php echo $this->Paginator->sort('Correo Electrónico'); ?></th>
								<th><?php echo $this->Paginator->sort('Creado'); ?></th>
								<th><?php echo $this->Paginator->sort('Modificado'); ?></th>
								<th class="actions"><?php echo __('Acciones'); ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($students as $user): ?>
							<tr>
								<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['email']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
								<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
								<td class="actions">
									<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $user['User']['id'])); ?>
									<br>
									<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $user['User']['id'])); ?>
									<br>
									<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $user['User']['id']), array(), __('¿Está seguro que desea eliminar el usuario %s?', $user['User']['id'])); ?>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
  				</div>
			</div>

			<br>
			<p>
				<?php echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}')));?>	
			</p>
			
			<br>
			<div class="paging">
			<?php
				echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
				echo $this->Paginator->numbers(array('separator' => ' '));
				echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
			?>
			</div>
		</div>
	</div>
</div>
