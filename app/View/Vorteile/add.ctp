<div class="vorteile form">
<?php echo $this->Form->create('Vorteil');?>
	<fieldset>
		<legend><?php echo __('Add Vorteil'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('auswahl');
		echo $this->Form->input('mehrfachauswahl');
		echo $this->Form->input('nachteil');
		echo $this->Form->input('wertvorteil');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vorteile'), array('action' => 'index'));?></li>
	</ul>
</div>
