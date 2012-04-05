<div class="eigenschaften view">
<h2><?php  echo __('Eigenschaft');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($eigenschaft['Eigenschaft']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kurzbezeichnung'); ?></dt>
		<dd>
			<?php echo h($eigenschaft['Eigenschaft']['kurzbezeichnung']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($eigenschaft['Eigenschaft']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Eigenschaft'), array('action' => 'edit', $eigenschaft['Eigenschaft']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Eigenschaft'), array('action' => 'delete', $eigenschaft['Eigenschaft']['id']), null, __('Are you sure you want to delete # %s?', $eigenschaft['Eigenschaft']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eigenschaft'), array('action' => 'add')); ?> </li>
	</ul>
</div>
