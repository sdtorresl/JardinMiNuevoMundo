<div class="students view">
<h2><?php echo __('Student'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($student['Student']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Code'); ?></dt>
		<dd>
			<?php echo h($student['Student']['code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identification'); ?></dt>
		<dd>
			<?php echo h($student['Student']['identification']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born Date'); ?></dt>
		<dd>
			<?php echo h($student['Student']['born_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Blood Type'); ?></dt>
		<dd>
			<?php echo h($student['Student']['blood_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Social Ensurance'); ?></dt>
		<dd>
			<?php echo h($student['Student']['social_ensurance']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo h($student['Student']['country']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Neighborhood'); ?></dt>
		<dd>
			<?php echo h($student['Student']['neighborhood']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($student['Student']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($student['Student']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone'); ?></dt>
		<dd>
			<?php echo h($student['Student']['telephone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['mother_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Phone'); ?></dt>
		<dd>
			<?php echo h($student['Student']['mother_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mother Email'); ?></dt>
		<dd>
			<?php echo h($student['Student']['mother_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['father_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Phone'); ?></dt>
		<dd>
			<?php echo h($student['Student']['father_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Father Email'); ?></dt>
		<dd>
			<?php echo h($student['Student']['father_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guardian Name'); ?></dt>
		<dd>
			<?php echo h($student['Student']['guardian_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guardian Phone'); ?></dt>
		<dd>
			<?php echo h($student['Student']['guardian_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Guardian Email'); ?></dt>
		<dd>
			<?php echo h($student['Student']['guardian_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Current State'); ?></dt>
		<dd>
			<?php echo h($student['Student']['current_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observations'); ?></dt>
		<dd>
			<?php echo h($student['Student']['observations']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($student['User']['username'], array('controller' => 'users', 'action' => 'view', $student['User']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Student'), array('action' => 'edit', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Student'), array('action' => 'delete', $student['Student']['id']), array(), __('Are you sure you want to delete # %s?', $student['Student']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Achievement Summaries'); ?></h3>
	<?php if (!empty($student['AchievementSummary'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Difficulty'); ?></th>
		<th><?php echo __('Observation'); ?></th>
		<th><?php echo __('Mean'); ?></th>
		<th><?php echo __('Achievement Category Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['AchievementSummary'] as $achievementSummary): ?>
		<tr>
			<td><?php echo $achievementSummary['id']; ?></td>
			<td><?php echo $achievementSummary['difficulty']; ?></td>
			<td><?php echo $achievementSummary['observation']; ?></td>
			<td><?php echo $achievementSummary['mean']; ?></td>
			<td><?php echo $achievementSummary['achievement_category_id']; ?></td>
			<td><?php echo $achievementSummary['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'achievement_summaries', 'action' => 'view', $achievementSummary['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'achievement_summaries', 'action' => 'edit', $achievementSummary['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'achievement_summaries', 'action' => 'delete', $achievementSummary['id']), array(), __('Are you sure you want to delete # %s?', $achievementSummary['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Achievement Summary'), array('controller' => 'achievement_summaries', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Grades'); ?></h3>
	<?php if (!empty($student['Grade'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th><?php echo __('Achievement Id'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Period'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Grade'] as $grade): ?>
		<tr>
			<td><?php echo $grade['id']; ?></td>
			<td><?php echo $grade['student_id']; ?></td>
			<td><?php echo $grade['achievement_id']; ?></td>
			<td><?php echo $grade['note']; ?></td>
			<td><?php echo $grade['period']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grades', 'action' => 'view', $grade['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grades', 'action' => 'edit', $grade['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grades', 'action' => 'delete', $grade['id']), array(), __('Are you sure you want to delete # %s?', $grade['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grade'), array('controller' => 'grades', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Period Passwords'); ?></h3>
	<?php if (!empty($student['PeriodPassword'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Password 1'); ?></th>
		<th><?php echo __('Password 2'); ?></th>
		<th><?php echo __('Password 3'); ?></th>
		<th><?php echo __('Password 4'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['PeriodPassword'] as $periodPassword): ?>
		<tr>
			<td><?php echo $periodPassword['id']; ?></td>
			<td><?php echo $periodPassword['password_1']; ?></td>
			<td><?php echo $periodPassword['password_2']; ?></td>
			<td><?php echo $periodPassword['password_3']; ?></td>
			<td><?php echo $periodPassword['password_4']; ?></td>
			<td><?php echo $periodPassword['year']; ?></td>
			<td><?php echo $periodPassword['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'period_passwords', 'action' => 'view', $periodPassword['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'period_passwords', 'action' => 'edit', $periodPassword['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'period_passwords', 'action' => 'delete', $periodPassword['id']), array(), __('Are you sure you want to delete # %s?', $periodPassword['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Period Password'), array('controller' => 'period_passwords', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Registrations'); ?></h3>
	<?php if (!empty($student['Registration'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th><?php echo __('Student Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Registration'] as $registration): ?>
		<tr>
			<td><?php echo $registration['id']; ?></td>
			<td><?php echo $registration['password']; ?></td>
			<td><?php echo $registration['year']; ?></td>
			<td><?php echo $registration['student_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'registrations', 'action' => 'view', $registration['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'registrations', 'action' => 'edit', $registration['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'registrations', 'action' => 'delete', $registration['id']), array(), __('Are you sure you want to delete # %s?', $registration['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registration'), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Courses'); ?></h3>
	<?php if (!empty($student['Course'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Year'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($student['Course'] as $course): ?>
		<tr>
			<td><?php echo $course['id']; ?></td>
			<td><?php echo $course['name']; ?></td>
			<td><?php echo $course['year']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'courses', 'action' => 'view', $course['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'courses', 'action' => 'edit', $course['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'courses', 'action' => 'delete', $course['id']), array(), __('Are you sure you want to delete # %s?', $course['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Course'), array('controller' => 'courses', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
