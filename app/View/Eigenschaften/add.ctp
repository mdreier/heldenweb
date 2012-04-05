<div class="eigenschaften form">
<?php echo $this->Form->create('Eigenschaft');?>
	<fieldset>
		<legend><?php echo __('Add Eigenschaft'); ?></legend>
	<?php
		echo $this->Form->input('kurzbezeichnung');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('action' => 'index'));?></li>
	</ul>
</div>
