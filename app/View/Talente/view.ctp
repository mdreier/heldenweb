<div class="talente view">
<h2><?php  echo __('Talent');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($talent['Talent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($talent['Talent']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sprachkomplexitaet'); ?></dt>
		<dd>
			<?php echo h($talent['Talent']['sprachkomplexitaet']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probe1'); ?></dt>
		<dd>
			<?php echo $this->Html->link($talent['Probe1']['name'], array('controller' => 'eigenschaften', 'action' => 'view', $talent['Probe1']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probe2'); ?></dt>
		<dd>
			<?php echo $this->Html->link($talent['Probe2']['name'], array('controller' => 'eigenschaften', 'action' => 'view', $talent['Probe2']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Probe3'); ?></dt>
		<dd>
			<?php echo $this->Html->link($talent['Probe3']['name'], array('controller' => 'eigenschaften', 'action' => 'view', $talent['Probe3']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talentart'); ?></dt>
		<dd>
			<?php echo $this->Html->link($talent['Talentart']['name'], array('controller' => 'talentarten', 'action' => 'view', $talent['Talentart']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Talent'), array('action' => 'edit', $talent['Talent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Talent'), array('action' => 'delete', $talent['Talent']['id']), null, __('Are you sure you want to delete # %s?', $talent['Talent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talentarten'), array('controller' => 'talentarten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talentart'), array('controller' => 'talentarten', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('controller' => 'eigenschaften', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Probe1'), array('controller' => 'eigenschaften', 'action' => 'add')); ?> </li>
	</ul>
</div>
