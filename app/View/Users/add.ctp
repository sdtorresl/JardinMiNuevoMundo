<!-- app/View/Users/add.ctp -->
<div class="content">
	<div class="users form">
	<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'inputDefaults'=>array('label'=>false))); ?>
		<fieldset>
			<h1><?php echo __('Agregar Usuario'); ?></h1>
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
			<!-- Register code -->
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-4 control-label">Código de registro</label>
				<div class="col-sm-4">
					<?php echo $this->Form->input('register_code', array('class' => 'form-control'));?>
				</div>
			</div>
		</fieldset>
	<?php echo $this->Form->end(__('Agregar')); ?>
	</div>
</div>