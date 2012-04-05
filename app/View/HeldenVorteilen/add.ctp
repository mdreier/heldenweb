<div class="heldenVorteilen form">
<?php echo $this->Form->create('HeldenVorteil');?>
	<fieldset>
		<legend><?php echo __('Add Helden Vorteil'); ?></legend>
	<?php
		echo $this->Form->input('held_id');
		echo $this->Form->input('vorteil_id');
		echo $this->Form->input('wert');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Helden Vorteilen'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vorteile'), array('controller' => 'vorteile', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vorteil'), array('controller' => 'vorteile', 'action' => 'add')); ?> </li>
	</ul>
</div>
