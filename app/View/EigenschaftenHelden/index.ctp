<div class="eigenschaftenHelden index">
	<h2><?php echo __('Eigenschaften Helden');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('eigenschaft_id');?></th>
			<th><?php echo $this->Paginator->sort('wert');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($eigenschaftenHelden as $eigenschaftenHeld): ?>
	<tr>
		<td><?php echo h($eigenschaftenHeld['EigenschaftenHeld']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($eigenschaftenHeld['Held']['name'], array('controller' => 'helden', 'action' => 'view', $eigenschaftenHeld['Held']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($eigenschaftenHeld['Eigenschaft']['name'], array('controller' => 'eigenschaften', 'action' => 'view', $eigenschaftenHeld['Eigenschaft']['id'])); ?>
		</td>
		<td><?php echo h($eigenschaftenHeld['EigenschaftenHeld']['wert']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $eigenschaftenHeld['EigenschaftenHeld']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $eigenschaftenHeld['EigenschaftenHeld']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $eigenschaftenHeld['EigenschaftenHeld']['id']), null, __('Are you sure you want to delete # %s?', $eigenschaftenHeld['EigenschaftenHeld']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Eigenschaften Held'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('controller' => 'eigenschaften', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eigenschaft'), array('controller' => 'eigenschaften', 'action' => 'add')); ?> </li>
	</ul>
</div>
