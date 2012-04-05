<div class="repraesentationen form">
<?php echo $this->Form->create('Repraesentation');?>
	<fieldset>
		<legend><?php echo __('Edit Repraesentation'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('zauber_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Repraesentation.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Repraesentation.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Repraesentationen'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
