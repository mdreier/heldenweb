<div class="repraesentationen view">
<h2><?php  echo __('Repraesentation');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($repraesentation['Repraesentation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zauber'); ?></dt>
		<dd>
			<?php echo $this->Html->link($repraesentation['Zauber']['name'], array('controller' => 'zauber', 'action' => 'view', $repraesentation['Zauber']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($repraesentation['Repraesentation']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Repraesentation'), array('action' => 'edit', $repraesentation['Repraesentation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Repraesentation'), array('action' => 'delete', $repraesentation['Repraesentation']['id']), null, __('Are you sure you want to delete # %s?', $repraesentation['Repraesentation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repraesentationen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repraesentation'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
