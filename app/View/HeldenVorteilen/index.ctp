<div class="heldenVorteilen index">
	<h2><?php echo __('Helden Vorteilen');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('vorteil_id');?></th>
			<th><?php echo $this->Paginator->sort('wert');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($heldenVorteilen as $heldenVorteil): ?>
	<tr>
		<td><?php echo h($heldenVorteil['HeldenVorteil']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($heldenVorteil['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenVorteil['Held']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($heldenVorteil['Vorteil']['name'], array('controller' => 'vorteile', 'action' => 'view', $heldenVorteil['Vorteil']['id'])); ?>
		</td>
		<td><?php echo h($heldenVorteil['HeldenVorteil']['wert']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $heldenVorteil['HeldenVorteil']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $heldenVorteil['HeldenVorteil']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $heldenVorteil['HeldenVorteil']['id']), null, __('Are you sure you want to delete # %s?', $heldenVorteil['HeldenVorteil']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Helden Vorteil'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vorteile'), array('controller' => 'vorteile', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vorteil'), array('controller' => 'vorteile', 'action' => 'add')); ?> </li>
	</ul>
</div>
