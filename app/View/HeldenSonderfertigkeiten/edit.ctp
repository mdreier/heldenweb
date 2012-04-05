<div class="heldenSonderfertigkeiten form">
<?php echo $this->Form->create('HeldenSonderfertigkeit');?>
	<fieldset>
		<legend><?php echo __('Edit Helden Sonderfertigkeit'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('held_id');
		echo $this->Form->input('sonderfertigkeit_id');
		echo $this->Form->input('spezialisierung');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('HeldenSonderfertigkeit.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('HeldenSonderfertigkeit.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Helden Sonderfertigkeiten'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('controller' => 'sonderfertigkeiten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('controller' => 'sonderfertigkeiten', 'action' => 'add')); ?> </li>
	</ul>
</div>
