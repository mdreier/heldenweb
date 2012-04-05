<div class="sonderfertigkeiten form">
<?php echo $this->Form->create('Sonderfertigkeit');?>
	<fieldset>
		<legend><?php echo __('Add Sonderfertigkeit'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('art');
		echo $this->Form->input('talent_id');
		echo $this->Form->input('elfenlied');
		echo $this->Form->input('fernkampf_sonderfertigkeit');
		echo $this->Form->input('gelaendekunde');
		echo $this->Form->input('hexenfluch');
		echo $this->Form->input('kampf_sonderfertigkeit');
		echo $this->Form->input('klerikal');
		echo $this->Form->input('liturgie');
		echo $this->Form->input('liturgiekenntnis');
		echo $this->Form->input('magisch');
		echo $this->Form->input('manoever');
		echo $this->Form->input('merkmalskenntnis');
		echo $this->Form->input('nahkampf_sonderfertigkeit');
		echo $this->Form->input('repraesentation');
		echo $this->Form->input('ritual');
		echo $this->Form->input('schamanen_ritualkenntnis');
		echo $this->Form->input('talentspezialisierung');
		echo $this->Form->input('waffenloser_kampfstil');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
