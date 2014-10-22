<br>
<br>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">

		<h2>Ingreso</h2>

		<div class="well">
			<?php echo $this->Session->flash(); ?>
			<br>
			<br>
			<?php echo $this->Form->create('User',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
				<div class="form-group">
					<label for="inputEmail3" class="col-sm-4 control-label">Usuario</label>
					<div class="col-sm-8">
						<?php echo $this->Form->input('username',array('class'=>'form-control'));?>
					</div>
				</div>

				<div class="form-group">
					<label for="inputPassword3" class="col-sm-4 control-label">Contraseña</label>
					<div class="col-sm-8">
						<?php echo $this->Form->input('password',array('class'=>'form-control'));?>
					</div>
				</div>
				<br>
				<div class="form-group">
					<div class="col-sm-offset-8 col-sm-10">
						<?php echo $this->Form->submit('Ingresar',array('class'=>'btn btn-primary'))?>
					</div>
				</div>
			<?php echo $this->Form->end();?>
		</div>

		<div class="btn btn-primary btn-exit">
			<a href="http://minuevomundo.com">Salir</a>
		</div>
	</div>
</div>