<div class="beschreibungen view">
<h2><?php  echo __('Beschreibung');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Held'); ?></dt>
		<dd>
			<?php echo $this->Html->link($beschreibung['Held']['name'], array('controller' => 'helden', 'action' => 'view', $beschreibung['Held']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Augenfarbe'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['augenfarbe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Aussehen'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['aussehen']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Familie'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['familie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geburtstag'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['geburtstag']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gewicht'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['gewicht']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Groesse'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['groesse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Haarfarbe'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['haarfarbe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stand'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['Stand']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titel'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['Titel']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sozialstatus'); ?></dt>
		<dd>
			<?php echo h($beschreibung['Beschreibung']['sozialstatus']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Beschreibung'), array('action' => 'edit', $beschreibung['Beschreibung']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Beschreibung'), array('action' => 'delete', $beschreibung['Beschreibung']['id']), null, __('Are you sure you want to delete # %s?', $beschreibung['Beschreibung']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Beschreibungen'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beschreibung'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('controller' => 'helden', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('controller' => 'helden', 'action' => 'add')); ?> </li>
	</ul>
</div>
