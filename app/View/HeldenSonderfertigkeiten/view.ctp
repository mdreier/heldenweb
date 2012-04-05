<div class="heldenSonderfertigkeiten view">
<h2><?php  echo __('Helden Sonderfertigkeit');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($heldenSonderfertigkeit['HeldenSonderfertigkeit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenSonderfertigkeit['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenSonderfertigkeit['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sonderfertigkeit'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenSonderfertigkeit['Sonderfertigkeit']['name'], array('controller' => 'sonderfertigkeiten', 'action' => 'view', $heldenSonderfertigkeit['Sonderfertigkeit']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Spezialisierung'); ?></dt>
		<dd>
			<?php echo h($heldenSonderfertigkeit['HeldenSonderfertigkeit']['spezialisierung']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Helden Sonderfertigkeit'), array('action' => 'edit', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Helden Sonderfertigkeit'), array('action' => 'delete', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id']), null, __('Are you sure you want to delete # %s?', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden Sonderfertigkeiten'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Helden Sonderfertigkeit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('controller' => 'sonderfertigkeiten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('controller' => 'sonderfertigkeiten', 'action' => 'add')); ?> </li>
	</ul>
</div>
