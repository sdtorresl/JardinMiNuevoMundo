<div>	
	<div class="content">

		<div class="code">
			<p>Código PIN: <? echo $student['User']['register_code']; ?></p>
		</div>

		<img id="logo" src="<?php echo APP.'webroot'.DS.'img'.DS.'pdf-top.png'; ?>" alt="" style="width: 680px;">

		<div class="students">
			<!-- Student Information -->
			<div>	
  				<h2>Información del Estudiante</h2>
				<table class="table">
					<tbody>
						<tr>
							<td colspan="2">Nombre(s): <? echo $student['Student']['first_name']; ?></td>
							<td colspan="2">Apellidos: <?php echo $student['Student']['last_name']; ?></td>
						</tr>
						<tr>
							<td colspan="2">Identificación: <? echo $student['Student']['identification_type'] . ' ' . $student['Student']['identification']; ?></td>
							<td colspan="2">Lugar de Expedición: <? echo $student['Student']['identification_town'] . ', ' . $student['Student']['identification_state']; ?></td>
						</tr>
						<tr>
							<td colspan="2">Fecha de Nacimiento: <? echo h($student['Student']['born_date']); ?></td>
							<td colspan="2">Lugar de Nacimiento: <?php echo $student['Student']['born_town'] . ', ' . $student['Student']['born_state']; ?></td>
						</tr>
						<tr>
							<td>Género:</td>
							<td><?php echo $student['Student']['genre']; ?></td>
							<td>Tipo de Sangre:</td>
							<td><? echo $student['Student']['blood_type']; ?></td>
						</tr>
						<tr>
							<td>EPS:</td>
							<td><? echo $student['Student']['social_ensurance']; ?></td>
							<td>Grado:</td>
							<td></td>
						</tr>
						<tr>
							<td>Dirección:</td>
							<td colspan="3"><?php echo $student['Student']['address']; ?>
						</tr>
						<tr>
							<td>Barrio:</td>
							<td><?php echo $student['Student']['neighborhood']; ?></td>
							<td>Teléfono</td>
							<td><?php echo $student['Student']['telephone']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Mother Information -->
			<div>	
  				<h2>Información de la Madre</h2>
				<table class="table">
					<tbody>
						<tr>
							<td colspan="2">Nombres y Apellidos: <? echo $student['Student']['mother_name']; ?></td>
						</tr>
						<tr>
							<td>Identificación: <? echo $student['Student']['mother_id_type'] . ' ' . $student['Student']['mother_id']; ?></td>
							<td>Dirección: <? echo $student['Student']['mother_address']; ?></td>
						</tr>
						<tr>
							<td>Teléfono: <? echo $student['Student']['mother_telephone']; ?></td>
							<td>Celular: <? echo $student['Student']['mother_phone']; ?></td>
						</tr>
						<tr>
							<td>Correo Electrónico:</td>
							<td><? echo $student['Student']['mother_email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Father Information -->
			<div>	
  				<h2>Información del Padre</h2>
				<table class="table">
					<tbody>
						<tr>
							<td colspan="2">Nombres y Apellidos: <? echo $student['Student']['father_name']; ?></td>
						</tr>
						<tr>
							<td>Identificación: <? echo $student['Student']['father_id_type'] . ' ' . $student['Student']['mother_id']; ?></td>
							<td>Dirección: <? echo $student['Student']['father_address']; ?></td>
						</tr>
						<tr>
							<td>Teléfono: <? echo $student['Student']['father_telephone']; ?></td>
							<td>Celular: <? echo $student['Student']['father_phone']; ?></td>
						</tr>
						<tr>
							<td>Correo Electrónico:</td>
							<td><? echo $student['Student']['father_email']; ?></td>
						</tr>
					</tbody>
				</table>
			</div>

			<!-- Guardian Information -->
			<div>	
  				<h2>Información del Acudiente</h2>
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

			<!-- Other Information -->
			<div>	
  				<h2>Otros datos</h2>
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

			<div class="signaturesContainer">
				<table class="signatures">
					<tr>
						<td>Firma de la Madre <br> CC: ___________________</td>
						<td>Firma del Padre <br> CC: ___________________</td>
						<td>Firma del Acudiente <br> CC: ___________________</td>
					</tr>
				</table>
			</div>
		</div>
	</div>
</div>