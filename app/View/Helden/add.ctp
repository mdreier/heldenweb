<div class="helden form">
<?php echo $this->Form->create('Held');?>
	<fieldset>
		<legend><?php echo __('Add Held'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('geschlecht');
		echo $this->Form->input('kultur');
		echo $this->Form->input('profession');
		echo $this->Form->input('rasse');
		echo $this->Form->input('stufe');
		echo $this->Form->input('zaubersprueche');
		echo $this->Form->input('Eigenschaft');
		echo $this->Form->input('Sonderfertigkeit');
		echo $this->Form->input('Talent');
		echo $this->Form->input('Vorteil');
		echo $this->Form->input('Zauber');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Helden'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Beschreibungen'), array('controller' => 'beschreibungen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beschreibung'), array('controller' => 'beschreibungen', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Werte'), array('controller' => 'werte', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wert'), array('controller' => 'werte', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('controller' => 'eigenschaften', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eigenschaft'), array('controller' => 'eigenschaften', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('controller' => 'sonderfertigkeiten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('controller' => 'sonderfertigkeiten', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vorteile'), array('controller' => 'vorteile', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vorteil'), array('controller' => 'vorteile', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
