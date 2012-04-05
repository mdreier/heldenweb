<div class="heldenZauber form">
<?php echo $this->Form->create('HeldenZauber');?>
	<fieldset>
		<legend><?php echo __('Edit Helden Zauber'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('held_id');
		echo $this->Form->input('zauber_id');
		echo $this->Form->input('zauberfertigkeitswert');
		echo $this->Form->input('repraesentation');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HeldenZauber.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HeldenZauber.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Helden Zauber'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
