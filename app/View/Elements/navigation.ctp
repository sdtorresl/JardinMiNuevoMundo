<?php $user_auth = $this->Session->read('Auth.User'); ?>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<!-- <div class="logo-container">
		<?php echo $this->Html->Image('logo.png', array('alt' => 'logo', 'id' => 'logo', 'url' => 'http://jardinminuevomundo.com')); ?>
	</div> -->
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<?php //echo $this->Html->link(__('Portal Académico'),'/',array('class'=>'navbar-brand'));?>
			<div class="navbar-brand">
				<?php echo $this->Html->image('logo-login.png', array('style' => 'width: 120px; margin-top: -10px;')); ?>
			</div>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		<ul class="nav navbar-nav">
				<!-- <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li> -->
				<li>
					<?php if ($user_auth['role'] == 'student'): ?>
						<?php echo $this->Html->link(__('Inicio'), array('action' => 'index', 'controller' => 'students')); ?>
					<?php elseif ($user_auth['role'] == 'admin'): ?>
						<?php echo $this->Html->link(__('Inicio'), array('action' => 'index', 'controller' => 'users')); ?>
					<?php elseif ($user_auth['role'] == 'teacher'): ?>
						<?php echo $this->Html->link(__('Inicio'), array('action' => 'index', 'controller' => 'users')); ?>
					<?php endif ?>
				</li>
				<li class="dropdown">
					<?php if ($user_auth['role'] == 'student'): ?>
				  		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo __('Matricula') ?> <span class="caret"></span></a>
				  		<ul class="dropdown-menu" role="menu">
				    		<li>
				    			<a href="#">
				    				<?php echo $this->Html->link(__('Inscripción de estudiante'), array('action' => 'register', 'controller' => 'students'));; ?>
				    			</a>
				    		</li>
				    		<li class="divider"></li>
				    		<li>
				    			<a href="#">
				    				<?php echo $this->Html->link(__('Documentos de matricula'), array('action' => 'download', 'controller' => 'students')); ?>		
				    			</a>
				    		</li>
				  		</ul>
				  	<?php endif ?>
				</li>
			</ul>
      		
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
    	</div><!-- /.navbar-collapse -->
	</div>
</nav>