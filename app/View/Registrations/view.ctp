<div class="registrations view">
<h2><?php echo __('Registration'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($registration['Registration']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($registration['Registration']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Year'); ?></dt>
		<dd>
			<?php echo h($registration['Registration']['year']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student'); ?></dt>
		<dd>
			<?php echo $this->Html->link($registration['Student']['id'], array('controller' => 'students', 'action' => 'view', $registration['Student']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Registration'), array('action' => 'edit', $registration['Registration']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Registration'), array('action' => 'delete', $registration['Registration']['id']), array(), __('Are you sure you want to delete # %s?', $registration['Registration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
