<div class="heldenTalenten form">
<?php echo $this->Form->create('HeldenTalent');?>
	<fieldset>
		<legend><?php echo __('Add Helden Talent'); ?></legend>
	<?php
		echo $this->Form->input('held_id');
		echo $this->Form->input('talent_id');
		echo $this->Form->input('talentwert');
		echo $this->Form->input('attacke');
		echo $this->Form->input('parade');
		echo $this->Form->input('behinderung');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Helden Talenten'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
