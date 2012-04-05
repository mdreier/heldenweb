<div class="heldenZauber view">
<h2><?php  echo __('Helden Zauber');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($heldenZauber['HeldenZauber']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenZauber['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenZauber['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zauber'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenZauber['Zauber']['name'], array('controller' => 'zauber', 'action' => 'view', $heldenZauber['Zauber']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zauberfertigkeitswert'); ?></dt>
		<dd>
			<?php echo h($heldenZauber['HeldenZauber']['zauberfertigkeitswert']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repraesentation'); ?></dt>
		<dd>
			<?php echo h($heldenZauber['HeldenZauber']['repraesentation']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Helden Zauber'), array('action' => 'edit', $heldenZauber['HeldenZauber']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Helden Zauber'), array('action' => 'delete', $heldenZauber['HeldenZauber']['id']), null, __('Are you sure you want to delete # %s?', $heldenZauber['HeldenZauber']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden Zauber'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Helden Zauber'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
