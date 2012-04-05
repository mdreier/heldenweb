<div class="heldenSonderfertigkeiten index">
	<h2><?php echo __('Helden Sonderfertigkeiten');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('sonderfertigkeit_id');?></th>
			<th><?php echo $this->Paginator->sort('spezialisierung');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($heldenSonderfertigkeiten as $heldenSonderfertigkeit): ?>
	<tr>
		<td><?php echo h($heldenSonderfertigkeit['HeldenSonderfertigkeit']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($heldenSonderfertigkeit['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenSonderfertigkeit['Held']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($heldenSonderfertigkeit['Sonderfertigkeit']['name'], array('controller' => 'sonderfertigkeiten', 'action' => 'view', $heldenSonderfertigkeit['Sonderfertigkeit']['id'])); ?>
		</td>
		<td><?php echo h($heldenSonderfertigkeit['HeldenSonderfertigkeit']['spezialisierung']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id']), null, __('Are you sure you want to delete # %s?', $heldenSonderfertigkeit['HeldenSonderfertigkeit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Helden Sonderfertigkeit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('controller' => 'sonderfertigkeiten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('controller' => 'sonderfertigkeiten', 'action' => 'add')); ?> </li>
	</ul>
</div>
