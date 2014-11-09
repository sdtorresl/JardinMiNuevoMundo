<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="logo-container">
		<?php echo $this->Html->Image('logo.png', array('alt' => 'logo', 'id' => 'logo', 'url' => 'http://jardinminuevomundo.com')); ?>
	</div>
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php echo $this->Html->link(__('Jardín Infantil Mi Nuevo Mundo'),'/',array('class'=>'navbar-brand'));?>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php if(!$this->Session->check('Auth.User')):?>
				<li><?php echo $this->Html->link(__('Acceder'),array('controller'=>'users','action'=>'login'))?></li>
				<?php else: ?>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $this->Session->read('Auth.User.username');?> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						 <li>
								<?php echo $this->Html->link(__('Perfil'),array('controller'=>'users','action'=>'profile'))?>
						 </li>
						 <li>
								<?php echo $this->Html->link(__('Cerrar Sesión'),array('controller'=>'users','action'=>'logout'))?>
						 </li>
					</ul>
				</li>
				<?php endif;?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div>