<div class="row">
	<div class="col-lg-4 col-lg-offset-4">

		<h2>Ingreso</h2>

		<div class="content">
			<?php echo $this->Session->flash(); ?>
			<br>
			<br>
			<?php echo $this->Form->create('User', array('class'=>'form-horizontal', 'inputDefaults'=>array('label'=>false)));?>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-4">
								<label for="inputEmail3" class="control-label">Usuario</label>
							</div>
							<div class="col-sm-8">
								<?php echo $this->Form->input('username', array('class'=>'form-control'));?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							<div class="col-sm-4">
								<label for="inputPassword3" class="control-label">Contraseña</label>
							</div>
							<div class="col-sm-8">
								<?php echo $this->Form->input('password', array('class'=>'form-control'));?>
							</div>
						</div>
					</div>
				</div>

				<div class="form-group">
					<?php echo $this->Form->submit('Ingresar', array('class'=>'btn btn-primary'))?>
				</div>
			<?php echo $this->Form->end();?>

		</div>

		<div class="btn btn-primary btn-exit">
			<a href="http://jardinminuevomundo.com">Salir</a>
		</div>
	</div>
</div>