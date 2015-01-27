<div class="col-md-3">
	<div class="row">
		<div class="photo col-md-9">
			<?php echo $this->Html->Image('photo.png', $options = array('photo')); ?>
			<?php echo __('Tu Foto Aquí'); ?>
		</div>
		
	</div>

	<?php if ($student['User']['role'] == 'admin'): ?>
	<div class="row">
		<div class="lateral-menu col-md-9">
			<ul class="nav nav-pills nav-stacked">
				<li><?php echo $this->Html->link(__('Editar Estudiante'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
				<li><?php echo $this->Form->postLink(__('Borrar Estudiante'), array('action' => 'delete', $student['Student']['id']), array(), __('¿Está seguro que desea borrar al estudiante %s?', $student['Student']['first_name'] . " " . $student['Student']['last_name'])); ?> </li>
				<li><?php echo $this->Html->link(__('Listar Estudiantes'), array('action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Registrar Estudiante'), array('action' => 'register')); ?> </li>
			</ul>
		</div>
	</div>
	<?php endif ?>
</div>

<div class="col-md-9">	
	<div class="title">
		<span class="bg-title"></span>
		<h1><span>Mis</span> Datos</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
		
		<div class="contentMenu">
		<?php echo $this->Session->flash(); ?>
			<div class="pull-right">
				<?php $viewUrl = $this->Html->url(array("controller" => "students", "action" => "view", $student['User']['id'] . '.pdf')); ?>
				<a href=<?php echo $viewUrl; ?>>
					<button type="button" class="btn btn-primary btn-sm">
							<span class="glyphicon glyphicon-print icon" aria-hidden="true"></span> Imprimir
					</button>
				</a>
			</div>

			<div class="clearfix"></div>
		</div>

		<div class="students">
			<!-- Student Information -->
			<div class="panel panel-default">	
  				<div class="panel-heading">Datos del Estudiante</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Nombres y Apellidos:</td>
							<td><? echo $student['Student']['first_name'] . ' ' . $student['Student']['last_name']; ?></td>
						</tr>
						<tr>
							<td>Identificación:</td>
							<td><? echo $student['Student']['identification_type'] . ' ' . $student['Student']['identification'] . ' ' . $student['Student']['identification_state'] . ' ' . $student['Student']['identification_town']; ?></td>
						</tr>
						<tr>
							<td>Fecha y lugar de Nacimiento: </td>
							<td><? echo h($student['Student']['born_date']) . '    ' . $student['Student']['born_town'] . ', ' . $student['Student']['born_state']; ?></td>
						</tr>
						<tr>
							<td>Género y Tipo de Sangre</td>
							<td><? echo $student['Student']['genre'] . ', ' . $student['Student']['blood_type']; ?></td>
						</tr>
						<tr>
							<td>EPS:</td>
							<td><? echo $student['Student']['social_ensurance']; ?></td>
						</tr>
						<tr>
							<td>Grado:</td>
							<td></td>
						</tr>
						<tr>
							<td>Dirección</td>
							<td><?php echo $student['Student']['address'] . ', ' . $student['Student']['neighborhood'] ; ?></td>
						</tr>
						<tr>
							<td>Teléfono</td>
							<td><?php echo $student['Student']['telephone']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Mother Information -->
			<div class="panel panel-default">	
  				<div class="panel-heading">Datos de la Madre</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Nombres y Apellidos:</td>
							<td><? echo $student['Student']['mother_name']; ?></td>
						</tr>
						<tr>
							<td>Identificación:</td>
							<td><? echo $student['Student']['mother_id_type'] . ' ' . $student['Student']['mother_id']; ?></td>
						</tr>
						<tr>
							<td>Dirección:</td>
							<td><? echo $student['Student']['mother_address']; ?></td>
						</tr>
						<tr>
							<td>Teléfono:</td>
							<td><? echo $student['Student']['mother_telephone']; ?></td>
						</tr>
						<tr>
							<td>Celular:</td>
							<td><? echo $student['Student']['mother_phone']; ?></td>
						</tr>
						<tr>
							<td>Correo Electrónico:</td>
							<td><? echo $student['Student']['mother_email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Father Information -->
			<div class="panel panel-default">	
  				<div class="panel-heading">Datos del Padre</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Nombres y Apellidos:</td>
							<td><? echo $student['Student']['father_name']; ?></td>
						</tr>
						<tr>
							<td>Identificación:</td>
							<td><? echo $student['Student']['father_id_type'] . ' ' . $student['Student']['father_id']; ?></td>
						</tr>
						<tr>
							<td>Dirección:</td>
							<td><? echo $student['Student']['father_address']; ?></td>
						</tr>
						<tr>
							<td>Teléfono:</td>
							<td><? echo $student['Student']['father_telephone']; ?></td>
						</tr>
						<tr>
							<td>Celular:</td>
							<td><? echo $student['Student']['father_phone']; ?></td>
						</tr>
						<tr>
							<td>Correo Electrónico:</td>
							<td><? echo $student['Student']['father_email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Guardian Information -->
			<div class="panel panel-default">	
  				<div class="panel-heading">Datos del Acudiente</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Nombres y Apellidos:</td>
							<td><? echo $student['Student']['guardian_name']; ?></td>
						</tr>
						<tr>
							<td>Parentesco:</td>
							<td><? echo $student['Student']['guardian_relationship']; ?></td>
						</tr>
						<tr>
							<td>Celular:</td>
							<td><? echo $student['Student']['guardian_phone']; ?></td>
						</tr>
						<tr>
							<td>Correo Electrónico:</td>
							<td><? echo $student['Student']['guardian_email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Otros datos Information -->
			<div class="panel panel-default">	
  				<div class="panel-heading">Otros datos</div>
				<table class="table">
					<tbody>
						<tr>
							<td>Servicio de Transporte:</td>
							<td><? echo $student['Student']['transport_service']; ?></td>
						</tr>
						<tr>
							<td>Servicio de semi-internado:</td>
							<td><? echo $student['Student']['boarding_service']; ?></td>
						</tr>
						<tr>
							<td>Deficiencias:</td>
							<td><? echo $student['Student']['deficiency']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>