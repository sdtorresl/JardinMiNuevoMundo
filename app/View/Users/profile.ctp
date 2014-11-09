<!-- app/View/Users/edit.ctp -->
<div class="content">
	<div class="users view">
		<h1><?php echo __('Perfil de Usuario'); ?></h1>
		<dl>
			<!-- ID -->
			<dt><?php echo __('ID'); ?></dt>
			<dd>
				<?php echo h($user['User']['id']); ?>
				&nbsp;
			</dd>
			<!-- Username -->
			<dt><?php echo __('Nombre de usuario:'); ?></dt>
			<dd>
				<?php echo h($user['User']['username']); ?>
				&nbsp;
			</dd>
			<!-- Rol -->
			<dt><?php echo __('Tipo:'); ?></dt>
			<dd>
				<?php
					switch ($user['User']['role']) {
						case 'admin':
							echo __("Administrador");
							break;
						case 'teacher':
							echo __("Profesor");
							break;
						case 'student':
							echo __("Estudiante");
							break;
						default:
							echo __("Indefinido");
					}
				?>
				&nbsp;
			</dd>
			<!-- Email -->
			<dt><?php echo __('Correo Electrónico:'); ?></dt>
			<dd>
				<?php echo h($user['User']['email']); ?>
				&nbsp;
			</dd>
			<!-- Register code -->
			<?php
			if ($user['User']['role'] == 'student'): ?>
				<dt><?php echo __('Código de Registro:'); ?></dt>
				<dd>
					<?php echo h($user['User']['register_code']); ?>
					&nbsp;
				</dd>
			<?php endif; ?>
			<!-- Created date -->
			<dt><?php echo __('Creado:'); ?></dt>
			<dd>
				<?php echo h($user['User']['created']); ?>
				&nbsp;
			</dd>
			<!-- Modified date -->
			<dt><?php echo __('Modificado:'); ?></dt>
			<dd>
				<?php echo h($user['User']['modified']); ?>
				&nbsp;
			</dd>
		</dl>
	</div>
</div>