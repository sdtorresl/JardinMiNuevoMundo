<!-- app/View/Users/add.ctp -->
<?php echo $this->Html->script("adduser", false); ?>

<div class="col-md-3">
	<div class="lateral-menu">
		<h3>Acciones</h3>
		<ul class="nav nav-pills nav-stacked">
			<li><?php echo $this->Html->link(__('Listar Usuarios'), array('action' => 'index')); ?></li>
		</ul>
	</div>
</div>

<div class="col-md-9">	
	<div class="title">
		<span class="bg-title"></span>
		<h1><span>Editar</span> Usuario</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
		<div class="users form">
			<br>
			<?php $this->Session->flash(); ?>
			<br>
			<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'inputDefaults'=>array('label'=>false))); ?>
				<fieldset>
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
					<!-- E-mail -->
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Correo Electrónico</label>
						<div class="col-sm-4">
							<?php echo $this->Form->input('email', array('class' => 'form-control'
							));?>
						</div>
					</div>
					<!-- Role -->
					<div class="form-group">
						<label for="inputEmail3" class="col-sm-4 control-label">Tipo</label>
						<div class="col-sm-4">
							<?php echo $this->Form->input('role', array(
								'options' => array('admin' => 'Administrador', 'teacher' => 'Profesor', 'student' => 'Estudiante'),
								'class' => 'form-control',
								'empty' => 'Seleccione',
								'onChange' => 'showRegisterCode()'
							));?>
						</div>
					</div>
					<!-- Register code -->
					<div class="form-group" id="registerCode" style="display: none">
						<label for="inputEmail3" class="col-sm-4 control-label">Código de registro</label>
						<div class="col-sm-4">
							<?php echo $this->Form->input('register_code', array(
								'class' => 'form-control'));?>
						</div>
					</div>
				</fieldset>

				<?php echo $this->Form->end(__('Agregar')); ?>
			</div>
		</div>
	</div>
</div>