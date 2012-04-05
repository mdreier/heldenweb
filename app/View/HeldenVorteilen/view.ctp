<div class="heldenVorteilen view">
<h2><?php  echo __('Helden Vorteil');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($heldenVorteil['HeldenVorteil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenVorteil['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenVorteil['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Vorteil'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenVorteil['Vorteil']['name'], array('controller' => 'vorteile', 'action' => 'view', $heldenVorteil['Vorteil']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wert'); ?></dt>
		<dd>
			<?php echo h($heldenVorteil['HeldenVorteil']['wert']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Helden Vorteil'), array('action' => 'edit', $heldenVorteil['HeldenVorteil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Helden Vorteil'), array('action' => 'delete', $heldenVorteil['HeldenVorteil']['id']), null, __('Are you sure you want to delete # %s?', $heldenVorteil['HeldenVorteil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden Vorteilen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Helden Vorteil'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vorteile'), array('controller' => 'vorteile', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vorteil'), array('controller' => 'vorteile', 'action' => 'add')); ?> </li>
	</ul>
</div>
