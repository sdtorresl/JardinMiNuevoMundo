<div class="row" style="height: 100%;">
	<div class="col-lg-4 col-lg-offset-4">

		<div class="title">
			<span class="bg-title"></span>
			<h1>Ingreso</h1>
			<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
		</div>

		<div class="content">
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

				<?php echo $this->Session->flash(); ?>
				<br>
				
				<div class="form-group" style="margin-right: 0px; margin-bottom: 0px;">
					<div class="row">
						<div class="col-sm-12">
							<?php echo $this->Form->end('Ingresar', array('class'=>'btn btn-primary'))?>
						</div>	
					</div>
				</div>
		</div>
	</div>
</div>