<div class="administrators form">
<?php echo $this->Form->create('Administrator'); ?>
	<fieldset>
		<legend><?php echo __('Edit Administrator'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('identification');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('telephone');
		echo $this->Form->input('email');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Administrator.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Administrator.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Administrators'), array('action' => 'index')); ?></li>
	</ul>
</div>
