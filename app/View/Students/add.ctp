<br>
<br>
<div class="row">
	<div class="col-lg-10 col-lg-offset-1">
		<div class="students form">
			<?php echo $this->Form->create('Student',array('class'=>'form-horizontal','inputDefaults'=>array('label'=>false)));?>
				<fieldset>
					<h1><?php echo __('Formulario de Inscripción'); ?></h1>
					
					<hr>
					<h3>Información del Estudiante:</h3>
					<div class="form-box">

						<div class="form-group">
							<div class="col-sm-6">
								<?echo $this->Form->input('first_name', array('label' => 'Nombre(s):', 'class' => 'form-control'));?>
							</div>
							<div class="col-sm-6">
								<?echo $this->Form->input('first_name', array('label' => 'Apellido(s):', 'class' => 'form-control'));?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4">
								<?echo $this->Form->input('identification', array('label' => 'Número NUIP:', 'class' => 'form-control'));?>
							</div>
							<div class="col-sm-4">
								<?echo $this->Form->input('born_date', array('label' => 'Fecha de Nacimiento:', 'class'=>'form-control form-date'));?>
							</div>
							<div class="col-sm-4">
								<?echo $this->Form->input('blood_type', array('label' => 'Tipo de Sangre:', 'class'=>'form-control'));?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-3">
								<?echo $this->Form->input('social_ensurance', array('label' => 'EPS:', 'class'=>'form-control'));?>
							</div>

							<div class="col-sm-3">
								<?echo $this->Form->input('country', array('label' => 'País:', 'class'=>'form-control'));?>
							</div>

							<div class="col-sm-6">
								<?echo $this->Form->input('address', array('label' => 'Dirección', 'class'=>'form-control'));?>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-4">
								<?echo $this->Form->input('neighborhood', array('label' => 'Lugar de residencia:', 'class'=>'form-control'));?>
							</div>

							<div class="col-sm-4">
								<?echo $this->Form->input('telephone', array('label' => 'Teléfono:', 'class'=>'form-control'));?>
							</div>

							<div class="col-sm-4">
								<?echo $this->Form->input('cellphone', array('label' => 'Teléfono celular:', 'class'=>'form-control'));?>
							</div>
						</div>

					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Nombre de la Madre</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('mother_name', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Teléfono de la Madre:</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('mother_phone', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Correo Electrónico de la Madre</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('mother_email', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Nombre del Padre:</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('father_name', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Teléfono del Padre:</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('father_phone', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Correo Electrónico del Padre:</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('father_email', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Nombre del Acudiente:</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('guardian_name', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Teléfono del Acudiente:</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('guardian_phone', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Correo Electrónico del Acudiente</label>
						<div class="col-sm-4">
							<?echo $this->Form->input('guardian_email', array('class'=>'form-control'));?>
						</div>
					</div>

					<div class="form-group">
						<label for="inputEmail3" class="col-sm-1 control-label">Grado al que Ingresa:</label>
						<div class="col-sm-4">
							<?// echo $this->Form->input('Course', array('class'=>'form-control'));?>
						</div>
					</div>

				
				</fieldset>
			<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>