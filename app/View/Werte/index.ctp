<div class="werte index">
	<h2><?php echo __('Werte');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('ap_gesamt');?></th>
			<th><?php echo $this->Paginator->sort('ap_eingesetzt');?></th>
			<th><?php echo $this->Paginator->sort('ap_verfuegbar');?></th>
			<th><?php echo $this->Paginator->sort('gp_start');?></th>
			<th><?php echo $this->Paginator->sort('gp_rest');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($werte as $wert): ?>
	<tr>
		<td><?php echo h($wert['Wert']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wert['Held']['name'], array('controller' => 'helden', 'action' => 'view', $wert['Held']['id'])); ?>
		</td>
		<td><?php echo h($wert['Wert']['ap_gesamt']); ?>&nbsp;</td>
		<td><?php echo h($wert['Wert']['ap_eingesetzt']); ?>&nbsp;</td>
		<td><?php echo h($wert['Wert']['ap_verfuegbar']); ?>&nbsp;</td>
		<td><?php echo h($wert['Wert']['gp_start']); ?>&nbsp;</td>
		<td><?php echo h($wert['Wert']['gp_rest']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wert['Wert']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wert['Wert']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wert['Wert']['id']), null, __('Are you sure you want to delete # %s?', $wert['Wert']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Wert'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
	</ul>
</div>
