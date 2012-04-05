<div class="zauber index">
	<h2><?php echo __('Zauber');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('basiskomplexitaet');?></th>
			<th><?php echo $this->Paginator->sort('lernkomplexitaet');?></th>
			<th><?php echo $this->Paginator->sort('hauszauber');?></th>
			<th><?php echo $this->Paginator->sort('Merkmale');?></th>
			<th><?php echo $this->Paginator->sort('probe1');?></th>
			<th><?php echo $this->Paginator->sort('probe2');?></th>
			<th><?php echo $this->Paginator->sort('probe3');?></th>
			<th><?php echo $this->Paginator->sort('kosten');?></th>
			<th><?php echo $this->Paginator->sort('reichweite');?></th>
			<th><?php echo $this->Paginator->sort('wirkungsdauer');?></th>
			<th><?php echo $this->Paginator->sort('zauberdauer');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($zauber as $zauber): ?>
	<tr>
		<td><?php echo h($zauber['Zauber']['id']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['name']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['basiskomplexitaet']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['lernkomplexitaet']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['hauszauber']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['Merkmale']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['probe1']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['probe2']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['probe3']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['kosten']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['reichweite']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['wirkungsdauer']); ?>&nbsp;</td>
		<td><?php echo h($zauber['Zauber']['zauberdauer']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $zauber['Zauber']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $zauber['Zauber']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $zauber['Zauber']['id']), null, __('Are you sure you want to delete # %s?', $zauber['Zauber']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Zauber'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Repraesentationen'), array('controller' => 'repraesentationen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repraesentation'), array('controller' => 'repraesentationen', 'action' => 'add')); ?> </li>
	</ul>
</div>
