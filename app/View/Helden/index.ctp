<div class="helden index">
	<h2><?php echo __('Helden');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('geschlecht');?></th>
			<th><?php echo $this->Paginator->sort('kultur');?></th>
			<th><?php echo $this->Paginator->sort('profession');?></th>
			<th><?php echo $this->Paginator->sort('rasse');?></th>
			<th><?php echo $this->Paginator->sort('stufe');?></th>
			<th><?php echo $this->Paginator->sort('zaubersprueche');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($helden as $held): ?>
	<tr>
		<td><?php echo h($held['Held']['id']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['name']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['geschlecht']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['kultur']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['profession']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['rasse']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['stufe']); ?>&nbsp;</td>
		<td><?php echo h($held['Held']['zaubersprueche']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $held['Held']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $held['Held']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $held['Held']['id']), null, __('Are you sure you want to delete # %s?', $held['Held']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Held'), array('action' => 'add')); ?></li>
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
