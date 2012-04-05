<div class="beschreibungen form">
<?php echo $this->Form->create('Beschreibung');?>
	<fieldset>
		<legend><?php echo __('Add Beschreibung'); ?></legend>
	<?php
		echo $this->Form->input('held_id');
		echo $this->Form->input('augenfarbe');
		echo $this->Form->input('aussehen');
		echo $this->Form->input('familie');
		echo $this->Form->input('geburtstag');
		echo $this->Form->input('gewicht');
		echo $this->Form->input('groesse');
		echo $this->Form->input('haarfarbe');
		echo $this->Form->input('Stand');
		echo $this->Form->input('Titel');
		echo $this->Form->input('sozialstatus');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Beschreibungen'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
	</ul>
</div>
