<div class="beschreibungen index">
	<h2><?php echo __('Beschreibungen');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('augenfarbe');?></th>
			<th><?php echo $this->Paginator->sort('aussehen');?></th>
			<th><?php echo $this->Paginator->sort('familie');?></th>
			<th><?php echo $this->Paginator->sort('geburtstag');?></th>
			<th><?php echo $this->Paginator->sort('gewicht');?></th>
			<th><?php echo $this->Paginator->sort('groesse');?></th>
			<th><?php echo $this->Paginator->sort('haarfarbe');?></th>
			<th><?php echo $this->Paginator->sort('Stand');?></th>
			<th><?php echo $this->Paginator->sort('Titel');?></th>
			<th><?php echo $this->Paginator->sort('sozialstatus');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($beschreibungen as $beschreibung): ?>
	<tr>
		<td><?php echo h($beschreibung['Beschreibung']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($beschreibung['Held']['name'], array('controller' => 'helden', 'action' => 'view', $beschreibung['Held']['id'])); ?>
		</td>
		<td><?php echo h($beschreibung['Beschreibung']['augenfarbe']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['aussehen']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['familie']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['geburtstag']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['gewicht']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['groesse']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['haarfarbe']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['Stand']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['Titel']); ?>&nbsp;</td>
		<td><?php echo h($beschreibung['Beschreibung']['sozialstatus']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $beschreibung['Beschreibung']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $beschreibung['Beschreibung']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $beschreibung['Beschreibung']['id']), null, __('Are you sure you want to delete # %s?', $beschreibung['Beschreibung']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Beschreibung'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
	</ul>
</div>
