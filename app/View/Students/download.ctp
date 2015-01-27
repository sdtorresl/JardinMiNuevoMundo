<div class="col-md-3">
	<div class="photo col-md-9">
		<?php echo $this->Html->Image('photo.png', $options = array('photo')); ?>
		<?php echo __('Tu Foto Aquí'); ?>
	</div>
</div>

<div class="col-md-9">
	<div class="title">
		<span class="bg-title bg-title-download"></span>
		<h1><span>Mis</span> Documentos</h1>
		<? echo $this->Html->Image('logo.png', array('class' => 'bg-logo')); ?>
	</div>

	<div class="content">
		<?php echo $this->Session->flash(); ?>

		<div class="students">
			<h3>Documentos de matrícula</h3>

			<p>Haga click sobre cada texto para descargar</p>
			<br>
			
			<ul class="downloads list-group">
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Carnet provisional'), $url = '/files/Carnet Provisional.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Contrato servicio educativo'), $url = '/files/Contrato Servicio Educativo 2015.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Contrato servicio jornada adicional'), $url = '/files/Contrato Servicio Jornada Adicional 2015.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Contrato servicio transporte'), $url = '/files/Contrato Servicio Transporte 2015.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Ficha de Matricula'), $url = '/files/Ficha de Matrícula.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Ficha de ruta'), $url = '/files/Ficha de Ruta.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Recibo Matrícula Jardín - Transición'), $url = '/files/Recibo Matrícula Jardín - Transición.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Recibo Matrícula Párvulos - Prejardín'), $url = '/files/Recibo Matrícula Párvulos - Prejardín.pdf', array('target' => '_blank')); ?>
				</li>
				<li class='list-group-item'>
					<?php echo $this->Html->link(__('Recibo Matrícula Primero'), $url = '/files/Recibo Matrícula Primero.pdf', array('target' => '_blank')); ?>
				</li>
			</ul>
		</div>
	</div>
</div>