<div class="werte form">
<?php echo $this->Form->create('Wert');?>
	<fieldset>
		<legend><?php echo __('Edit Wert'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('held_id');
		echo $this->Form->input('ap_gesamt');
		echo $this->Form->input('ap_eingesetzt');
		echo $this->Form->input('ap_verfuegbar');
		echo $this->Form->input('gp_start');
		echo $this->Form->input('gp_rest');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Wert.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Wert.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Werte'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
	</ul>
</div>
