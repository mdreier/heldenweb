<div class="vorteile view">
<h2><?php  echo __('Vorteil');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($vorteil['Vorteil']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($vorteil['Vorteil']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Auswahl'); ?></dt>
		<dd>
			<?php echo h($vorteil['Vorteil']['auswahl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Mehrfachauswahl'); ?></dt>
		<dd>
			<?php echo h($vorteil['Vorteil']['mehrfachauswahl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nachteil'); ?></dt>
		<dd>
			<?php echo h($vorteil['Vorteil']['nachteil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Wertvorteil'); ?></dt>
		<dd>
			<?php echo h($vorteil['Vorteil']['wertvorteil']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vorteil'), array('action' => 'edit', $vorteil['Vorteil']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Vorteil'), array('action' => 'delete', $vorteil['Vorteil']['id']), null, __('Are you sure you want to delete # %s?', $vorteil['Vorteil']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vorteile'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vorteil'), array('action' => 'add')); ?> </li>
	</ul>
</div>
