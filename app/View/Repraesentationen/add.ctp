<div class="repraesentationen form">
<?php echo $this->Form->create('Repraesentation');?>
	<fieldset>
		<legend><?php echo __('Add Repraesentation'); ?></legend>
	<?php
		echo $this->Form->input('zauber_id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Repraesentationen'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
