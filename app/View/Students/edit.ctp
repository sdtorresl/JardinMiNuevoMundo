<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('code');
		echo $this->Form->input('identification');
		echo $this->Form->input('born_date');
		echo $this->Form->input('blood_type');
		echo $this->Form->input('social_ensurance');
		echo $this->Form->input('country');
		echo $this->Form->input('neighborhood');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('telephone');
		echo $this->Form->input('mother_name');
		echo $this->Form->input('mother_phone');
		echo $this->Form->input('mother_email');
		echo $this->Form->input('father_name');
		echo $this->Form->input('father_phone');
		echo $this->Form->input('father_email');
		echo $this->Form->input('guardian_name');
		echo $this->Form->input('guardian_phone');
		echo $this->Form->input('guardian_email');
		echo $this->Form->input('current_state');
		echo $this->Form->input('observations');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Course');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Student.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Student.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Achievement Summaries'), array('controller' => 'achievement_summaries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Achievement Summary'), array('controller' => 'achievement_summaries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grades'), array('controller' => 'grades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Period Passwords'), array('controller' => 'period_passwords', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Period Password'), array('controller' => 'period_passwords', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations'), array('controller' => 'registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration'), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Courses'), array('controller' => 'courses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
	</ul>
</div>
