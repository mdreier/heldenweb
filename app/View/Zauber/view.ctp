<div class="zauber view">
<h2><?php  echo __('Zauber');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Basiskomplexitaet'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['basiskomplexitaet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lernkomplexitaet'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['lernkomplexitaet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hauszauber'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['hauszauber']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Merkmale'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['Merkmale']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probe1'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['probe1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probe2'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['probe2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probe3'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['probe3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kosten'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['kosten']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Reichweite'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['reichweite']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wirkungsdauer'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['wirkungsdauer']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zauberdauer'); ?></dt>
		<dd>
			<?php echo h($zauber['Zauber']['zauberdauer']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Zauber'), array('action' => 'edit', $zauber['Zauber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Zauber'), array('action' => 'delete', $zauber['Zauber']['id']), null, __('Are you sure you want to delete # %s?', $zauber['Zauber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repraesentationen'), array('controller' => 'repraesentationen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repraesentation'), array('controller' => 'repraesentationen', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Repraesentationen');?></h3>
	<?php if (!empty($zauber['Repraesentation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Zauber Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($zauber['Repraesentation'] as $repraesentation): ?>
		<tr>
			<td><?php echo $repraesentation['id'];?></td>
			<td><?php echo $repraesentation['zauber_id'];?></td>
			<td><?php echo $repraesentation['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'repraesentationen', 'action' => 'view', $repraesentation['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'repraesentationen', 'action' => 'edit', $repraesentation['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'repraesentationen', 'action' => 'delete', $repraesentation['id']), null, __('Are you sure you want to delete # %s?', $repraesentation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Repraesentation'), array('controller' => 'repraesentationen', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
