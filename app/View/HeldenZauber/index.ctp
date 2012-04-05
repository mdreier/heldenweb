<div class="heldenZauber index">
	<h2><?php echo __('Helden Zauber');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('zauber_id');?></th>
			<th><?php echo $this->Paginator->sort('zauberfertigkeitswert');?></th>
			<th><?php echo $this->Paginator->sort('repraesentation');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($heldenZauber as $heldenZauber): ?>
	<tr>
		<td><?php echo h($heldenZauber['HeldenZauber']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($heldenZauber['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenZauber['Held']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($heldenZauber['Zauber']['name'], array('controller' => 'zauber', 'action' => 'view', $heldenZauber['Zauber']['id'])); ?>
		</td>
		<td><?php echo h($heldenZauber['HeldenZauber']['zauberfertigkeitswert']); ?>&nbsp;</td>
		<td><?php echo h($heldenZauber['HeldenZauber']['repraesentation']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $heldenZauber['HeldenZauber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $heldenZauber['HeldenZauber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $heldenZauber['HeldenZauber']['id']), null, __('Are you sure you want to delete # %s?', $heldenZauber['HeldenZauber']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Helden Zauber'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
