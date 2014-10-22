<div class="students index">
	<h2><?php echo __('Students'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('code'); ?></th>
			<th><?php echo $this->Paginator->sort('identification'); ?></th>
			<th><?php echo $this->Paginator->sort('born_date'); ?></th>
			<th><?php echo $this->Paginator->sort('blood_type'); ?></th>
			<th><?php echo $this->Paginator->sort('social_ensurance'); ?></th>
			<th><?php echo $this->Paginator->sort('country'); ?></th>
			<th><?php echo $this->Paginator->sort('neighborhood'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('telephone'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_name'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('mother_email'); ?></th>
			<th><?php echo $this->Paginator->sort('father_name'); ?></th>
			<th><?php echo $this->Paginator->sort('father_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('father_email'); ?></th>
			<th><?php echo $this->Paginator->sort('guardian_name'); ?></th>
			<th><?php echo $this->Paginator->sort('guardian_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('guardian_email'); ?></th>
			<th><?php echo $this->Paginator->sort('current_state'); ?></th>
			<th><?php echo $this->Paginator->sort('observations'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($students as $student): ?>
	<tr>
		<td><?php echo h($student['Student']['id']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['code']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['identification']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['born_date']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['blood_type']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['social_ensurance']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['country']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['neighborhood']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['address']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['phone']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['telephone']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['mother_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['mother_phone']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['mother_email']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['father_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['father_phone']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['father_email']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['guardian_name']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['guardian_phone']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['guardian_email']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['current_state']); ?>&nbsp;</td>
		<td><?php echo h($student['Student']['observations']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?></li>
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
