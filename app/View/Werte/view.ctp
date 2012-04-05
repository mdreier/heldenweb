<div class="werte view">
<h2><?php  echo __('Wert');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wert['Wert']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wert['Held']['name'], array('controller' => 'helden', 'action' => 'view', $wert['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap Gesamt'); ?></dt>
		<dd>
			<?php echo h($wert['Wert']['ap_gesamt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap Eingesetzt'); ?></dt>
		<dd>
			<?php echo h($wert['Wert']['ap_eingesetzt']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ap Verfuegbar'); ?></dt>
		<dd>
			<?php echo h($wert['Wert']['ap_verfuegbar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gp Start'); ?></dt>
		<dd>
			<?php echo h($wert['Wert']['gp_start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gp Rest'); ?></dt>
		<dd>
			<?php echo h($wert['Wert']['gp_rest']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wert'), array('action' => 'edit', $wert['Wert']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wert'), array('action' => 'delete', $wert['Wert']['id']), null, __('Are you sure you want to delete # %s?', $wert['Wert']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Werte'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wert'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
	</ul>
</div>
