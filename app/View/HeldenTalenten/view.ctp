<div class="heldenTalenten view">
<h2><?php  echo __('Helden Talent');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($heldenTalent['HeldenTalent']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenTalent['Held']['name'], array('controller' => 'helden', 'action' => 'view', $heldenTalent['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($heldenTalent['Talent']['name'], array('controller' => 'talente', 'action' => 'view', $heldenTalent['Talent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talentwert'); ?></dt>
		<dd>
			<?php echo h($heldenTalent['HeldenTalent']['talentwert']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Attacke'); ?></dt>
		<dd>
			<?php echo h($heldenTalent['HeldenTalent']['attacke']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parade'); ?></dt>
		<dd>
			<?php echo h($heldenTalent['HeldenTalent']['parade']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Behinderung'); ?></dt>
		<dd>
			<?php echo h($heldenTalent['HeldenTalent']['behinderung']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Helden Talent'), array('action' => 'edit', $heldenTalent['HeldenTalent']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Helden Talent'), array('action' => 'delete', $heldenTalent['HeldenTalent']['id']), null, __('Are you sure you want to delete # %s?', $heldenTalent['HeldenTalent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden Talenten'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Helden Talent'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
