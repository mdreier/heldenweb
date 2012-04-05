<div class="talente form">
<?php echo $this->Form->create('Talent');?>
	<fieldset>
		<legend><?php echo __('Edit Talent'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('sprachkomplexitaet');
		echo $this->Form->input('probe1');
		echo $this->Form->input('probe2');
		echo $this->Form->input('probe3');
		echo $this->Form->input('talentart_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Talent.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Talent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Talente'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Talentarten'), array('controller' => 'talentarten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talentart'), array('controller' => 'talentarten', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('controller' => 'eigenschaften', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Probe1'), array('controller' => 'eigenschaften', 'action' => 'add')); ?> </li>
	</ul>
</div>
