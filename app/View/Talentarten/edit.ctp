<div class="talentarten form">
<?php echo $this->Form->create('Talentart');?>
	<fieldset>
		<legend><?php echo __('Edit Talentart'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Talentart.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Talentart.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Talentarten'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
