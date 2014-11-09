<!-- app/View/Users/edit.ctp -->
<div class="col-md-3">
	<div class="lateral-menu">
		<div class="actions">
			<h3><?php echo __('Acciones'); ?></h3>
			<ul>
				<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('User.id')), array(), __('¿Está seguro que desea borrar el usuario %s?', $this->Form->value('User.username'))); ?></li>
			</ul>
		</div>
	</div>
</div>
<div class="col-md-9">	
	<div class="content">
		<div class="users form">
		<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'inputDefaults'=>array('label'=>false))); ?>
			<fieldset>
				<h1><?php echo __('Editar Usuario'); ?></h1>
				<!-- Username -->
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">Usuario</label>
					<div class="col-sm-4">
						<?php echo $this->Form->input('username', array('class' => 'form-control'));?>
					</div>
				</div>
				<!-- Password -->
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">Contraseña</label>
					<div class="col-sm-4">
						<?php echo $this->Form->input('password', array('class' => 'form-control'));?>
					</div>
				</div>
				<!-- Role -->
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">Tipo</label>
					<div class="col-sm-4">
						<?php echo $this->Form->input('role', array(
							'options' => array('admin' => 'Administrador', 'teacher' => 'Profesor', 'student' => 'Estudiante'),
							'class' => 'form-control'
						));?>
					</div>
				</div>
				<!-- Email -->
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">Correo Electrónico</label>
					<div class="col-sm-4">
						<?php echo $this->Form->input('email', array('class' => 'form-control'));?>
					</div>
				</div>
				<!-- Register code -->
				<?php if ($user['User']['role'] == 'student'): ?>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">Código de registro</label>
					<div class="col-sm-4">
						<?php echo $this->Form->input('register_code', array('class' => 'form-control'));?>
					</div>
				</div>
				<?php endif; ?>
			</fieldset>
		<?php echo $this->Form->end(__('Guardar Cambios')); ?>
		</div>
	</div>
</div>