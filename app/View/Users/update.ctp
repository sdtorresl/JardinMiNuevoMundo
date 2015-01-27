<?php echo $this->Form->create('User'); ?>

<div align="center">
	<?php echo $this->Session->flash(); ?>
	<table style="border:1px solid #A5A5A5;">
		<tr>
			<td align="right">
				<div style="margin-top:8px;">
					<?php __('old_password');?>
				</div>
			</td>

			<td>
				<?php echo $this->Form->input('password_old',array('type'=>'password','label'=>false,'size'=>15));?>
			</td>
		</tr>

		<tr>
			<td align="right">
				<div style="margin-top:8px;">
					<?php __('new_password');?>
				</div>
			</td>

			<td>
				<?php echo $this->Form->input('password_new',array('type'=>'password','label'=>false,'size'=>15));?>
			</td>

		</tr>

		<tr>
			<td align="right">
				<div style="margin-top:8px;">
					<?php __('confirm_new_password');?>
				</div>
			</td>

			<td>
				<?php echo $this->Form->input('password_confirm',array('type'=>'password','label'=>false,'size'=>15));?>
			</td>
		</tr>

		<tr>
			<td>
			</td>
			<td>
				<input type="submit" style="margin-top:5px;float:right;display:inline;" value="<?php echo __('Save');?>"  />
			</td>
		</tr>
	</table>
</div>