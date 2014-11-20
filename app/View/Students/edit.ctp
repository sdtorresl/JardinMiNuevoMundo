<div class="students form">
<?php echo $this->Form->create('Student'); ?>
	<fieldset>
		<legend><?php echo __('Edit Student'); ?></legend>
	<?php
		echo $this->Form->input('id');
		// echo $this->Form->input('user_id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('identification');
		echo $this->Form->input('identification_type');
		echo $this->Form->input('identification_town');
		echo $this->Form->input('identification_state');
		echo $this->Form->input('genre');
		echo $this->Form->input('born_state');
		echo $this->Form->input('born_town');
		echo $this->Form->input('born_date');
		echo $this->Form->input('blood_type');
		echo $this->Form->input('social_ensurance');
		echo $this->Form->input('neighborhood');
		echo $this->Form->input('address');
		echo $this->Form->input('telephone');
		echo $this->Form->input('mother_name');
		// echo $this->Form->input('mother_id');
		echo $this->Form->input('mother_id_type');
		echo $this->Form->input('mother_address');
		echo $this->Form->input('mother_phone');
		echo $this->Form->input('mother_telephone');
		echo $this->Form->input('mother_email');
		echo $this->Form->input('mother_degree');
		echo $this->Form->input('mother_major');
		echo $this->Form->input('mother_occupation');
		echo $this->Form->input('mother_company');
		echo $this->Form->input('father_name');
		// echo $this->Form->input('father_id');
		echo $this->Form->input('father_id_type');
		echo $this->Form->input('father_address');
		echo $this->Form->input('father_phone');
		echo $this->Form->input('father_telephone');
		echo $this->Form->input('father_email');
		echo $this->Form->input('father_degree');
		echo $this->Form->input('father_major');
		echo $this->Form->input('father_occupation');
		echo $this->Form->input('father_company');
		echo $this->Form->input('guardian_name');
		echo $this->Form->input('guardian_phone');
		echo $this->Form->input('guardian_email');
		echo $this->Form->input('current_state');
		echo $this->Form->input('guardian_relationship');
		echo $this->Form->input('observations');
		echo $this->Form->input('born_place');
		echo $this->Form->input('type');
		echo $this->Form->input('live_with');
		echo $this->Form->input('brother_number');
		echo $this->Form->input('brother_place');
		echo $this->Form->input('school1');
		echo $this->Form->input('school1_grade');
		echo $this->Form->input('school1_year');
		echo $this->Form->input('school2');
		echo $this->Form->input('school2_grade');
		echo $this->Form->input('school2_year');
		echo $this->Form->input('school3');
		echo $this->Form->input('school3_grade');
		echo $this->Form->input('school3_year');
		echo $this->Form->input('transport_service');
		echo $this->Form->input('boarding_service');
		echo $this->Form->input('deficiency');
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
