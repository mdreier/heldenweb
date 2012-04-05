<div class="sonderfertigkeiten index">
	<h2><?php echo __('Sonderfertigkeiten');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('art');?></th>
			<th><?php echo $this->Paginator->sort('talent_id');?></th>
			<th><?php echo $this->Paginator->sort('elfenlied');?></th>
			<th><?php echo $this->Paginator->sort('fernkampf_sonderfertigkeit');?></th>
			<th><?php echo $this->Paginator->sort('gelaendekunde');?></th>
			<th><?php echo $this->Paginator->sort('hexenfluch');?></th>
			<th><?php echo $this->Paginator->sort('kampf_sonderfertigkeit');?></th>
			<th><?php echo $this->Paginator->sort('klerikal');?></th>
			<th><?php echo $this->Paginator->sort('liturgie');?></th>
			<th><?php echo $this->Paginator->sort('liturgiekenntnis');?></th>
			<th><?php echo $this->Paginator->sort('magisch');?></th>
			<th><?php echo $this->Paginator->sort('manoever');?></th>
			<th><?php echo $this->Paginator->sort('merkmalskenntnis');?></th>
			<th><?php echo $this->Paginator->sort('nahkampf_sonderfertigkeit');?></th>
			<th><?php echo $this->Paginator->sort('repraesentation');?></th>
			<th><?php echo $this->Paginator->sort('ritual');?></th>
			<th><?php echo $this->Paginator->sort('schamanen_ritualkenntnis');?></th>
			<th><?php echo $this->Paginator->sort('talentspezialisierung');?></th>
			<th><?php echo $this->Paginator->sort('waffenloser_kampfstil');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($sonderfertigkeiten as $sonderfertigkeit): ?>
	<tr>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['id']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['name']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['art']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($sonderfertigkeit['Talent']['name'], array('controller' => 'talente', 'action' => 'view', $sonderfertigkeit['Talent']['id'])); ?>
		</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['elfenlied']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['fernkampf_sonderfertigkeit']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['gelaendekunde']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['hexenfluch']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['kampf_sonderfertigkeit']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['klerikal']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['liturgie']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['liturgiekenntnis']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['magisch']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['manoever']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['merkmalskenntnis']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['nahkampf_sonderfertigkeit']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['repraesentation']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['ritual']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['schamanen_ritualkenntnis']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['talentspezialisierung']); ?>&nbsp;</td>
		<td><?php echo h($sonderfertigkeit['Sonderfertigkeit']['waffenloser_kampfstil']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $sonderfertigkeit['Sonderfertigkeit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $sonderfertigkeit['Sonderfertigkeit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $sonderfertigkeit['Sonderfertigkeit']['id']), null, __('Are you sure you want to delete # %s?', $sonderfertigkeit['Sonderfertigkeit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
