<div class="eigenschaftenHelden view">
<h2><?php  echo __('Eigenschaften Held');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eigenschaftenHeld['EigenschaftenHeld']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eigenschaftenHeld['Held']['name'], array('controller' => 'helden', 'action' => 'view', $eigenschaftenHeld['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eigenschaft'); ?></dt>
		<dd>
			<?php echo $this->Html->link($eigenschaftenHeld['Eigenschaft']['name'], array('controller' => 'eigenschaften', 'action' => 'view', $eigenschaftenHeld['Eigenschaft']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wert'); ?></dt>
		<dd>
			<?php echo h($eigenschaftenHeld['EigenschaftenHeld']['wert']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eigenschaften Held'), array('action' => 'edit', $eigenschaftenHeld['EigenschaftenHeld']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eigenschaften Held'), array('action' => 'delete', $eigenschaftenHeld['EigenschaftenHeld']['id']), null, __('Are you sure you want to delete # %s?', $eigenschaftenHeld['EigenschaftenHeld']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften Helden'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eigenschaften Held'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('controller' => 'eigenschaften', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eigenschaft'), array('controller' => 'eigenschaften', 'action' => 'add')); ?> </li>
	</ul>
</div>
