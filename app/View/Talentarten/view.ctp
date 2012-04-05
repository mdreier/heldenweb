<div class="talentarten view">
<h2><?php  echo __('Talentart');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($talentart['Talentart']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($talentart['Talentart']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Talentart'), array('action' => 'edit', $talentart['Talentart']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Talentart'), array('action' => 'delete', $talentart['Talentart']['id']), null, __('Are you sure you want to delete # %s?', $talentart['Talentart']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Talentarten'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talentart'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Talente');?></h3>
	<?php if (!empty($talentart['Talent'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Sprachkomplexitaet'); ?></th>
		<th><?php echo __('Probe1'); ?></th>
		<th><?php echo __('Probe2'); ?></th>
		<th><?php echo __('Probe3'); ?></th>
		<th><?php echo __('Talentart Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($talentart['Talent'] as $talent): ?>
		<tr>
			<td><?php echo $talent['id'];?></td>
			<td><?php echo $talent['name'];?></td>
			<td><?php echo $talent['sprachkomplexitaet'];?></td>
			<td><?php echo $talent['probe1'];?></td>
			<td><?php echo $talent['probe2'];?></td>
			<td><?php echo $talent['probe3'];?></td>
			<td><?php echo $talent['talentart_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'talente', 'action' => 'view', $talent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'talente', 'action' => 'edit', $talent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'talente', 'action' => 'delete', $talent['id']), null, __('Are you sure you want to delete # %s?', $talent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
