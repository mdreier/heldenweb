<div class="heldenTalenten index">
	<h2><?php echo __('Helden Talenten');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('held_id');?></th>
			<th><?php echo $this->Paginator->sort('talent_id');?></th>
			<th><?php echo $this->Paginator->sort('talentwert');?></th>
			<th><?php echo $this->Paginator->sort('attacke');?></th>
			<th><?php echo $this->Paginator->sort('parade');?></th>
			<th><?php echo $this->Paginator->sort('behinderung');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($heldenTalenten as $heldenTalent): ?>
	<tr>
		<td><?php echo h($heldenTalent['HeldenTalent']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($heldenTalent['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenTalent['Held']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($heldenTalent['Talent']['name'], array('controller' => 'talente', 'action' => 'view', $heldenTalent['Talent']['id'])); ?>
		</td>
		<td><?php echo h($heldenTalent['HeldenTalent']['talentwert']); ?>&nbsp;</td>
		<td><?php echo h($heldenTalent['HeldenTalent']['attacke']); ?>&nbsp;</td>
		<td><?php echo h($heldenTalent['HeldenTalent']['parade']); ?>&nbsp;</td>
		<td><?php echo h($heldenTalent['HeldenTalent']['behinderung']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $heldenTalent['HeldenTalent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $heldenTalent['HeldenTalent']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $heldenTalent['HeldenTalent']['id']), null, __('Are you sure you want to delete # %s?', $heldenTalent['HeldenTalent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Helden Talent'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
