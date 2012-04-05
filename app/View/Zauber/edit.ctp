<div class="zauber form">
<?php echo $this->Form->create('Zauber');?>
	<fieldset>
		<legend><?php echo __('Edit Zauber'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('basiskomplexitaet');
		echo $this->Form->input('lernkomplexitaet');
		echo $this->Form->input('hauszauber');
		echo $this->Form->input('Merkmale');
		echo $this->Form->input('probe1');
		echo $this->Form->input('probe2');
		echo $this->Form->input('probe3');
		echo $this->Form->input('kosten');
		echo $this->Form->input('reichweite');
		echo $this->Form->input('wirkungsdauer');
		echo $this->Form->input('zauberdauer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Zauber.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Zauber.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Repraesentationen'), array('controller' => 'repraesentationen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repraesentation'), array('controller' => 'repraesentationen', 'action' => 'add')); ?> </li>
	</ul>
</div>
