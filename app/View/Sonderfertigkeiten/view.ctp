<div class="sonderfertigkeiten view">
<h2><?php  echo __('Sonderfertigkeit');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Art'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['art']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($sonderfertigkeit['Talent']['name'], array('controller' => 'talente', 'action' => 'view', $sonderfertigkeit['Talent']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Elfenlied'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['elfenlied']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fernkampf Sonderfertigkeit'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['fernkampf_sonderfertigkeit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gelaendekunde'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['gelaendekunde']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Hexenfluch'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['hexenfluch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kampf Sonderfertigkeit'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['kampf_sonderfertigkeit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Klerikal'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['klerikal']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Liturgie'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['liturgie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Liturgiekenntnis'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['liturgiekenntnis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Magisch'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['magisch']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Manoever'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['manoever']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Merkmalskenntnis'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['merkmalskenntnis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nahkampf Sonderfertigkeit'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['nahkampf_sonderfertigkeit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Repraesentation'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['repraesentation']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ritual'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['ritual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Schamanen Ritualkenntnis'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['schamanen_ritualkenntnis']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Talentspezialisierung'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['talentspezialisierung']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Waffenloser Kampfstil'); ?></dt>
		<dd>
			<?php echo h($sonderfertigkeit['Sonderfertigkeit']['waffenloser_kampfstil']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sonderfertigkeit'), array('action' => 'edit', $sonderfertigkeit['Sonderfertigkeit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sonderfertigkeit'), array('action' => 'delete', $sonderfertigkeit['Sonderfertigkeit']['id']), null, __('Are you sure you want to delete # %s?', $sonderfertigkeit['Sonderfertigkeit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
	</ul>
</div>
