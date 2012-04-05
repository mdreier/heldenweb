<div class="helden view">
<h2><?php  echo __('Held');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($held['Held']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($held['Held']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Geschlecht'); ?></dt>
		<dd>
			<?php echo h($held['Held']['geschlecht']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Kultur'); ?></dt>
		<dd>
			<?php echo h($held['Held']['kultur']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profession'); ?></dt>
		<dd>
			<?php echo h($held['Held']['profession']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rasse'); ?></dt>
		<dd>
			<?php echo h($held['Held']['rasse']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Stufe'); ?></dt>
		<dd>
			<?php echo h($held['Held']['stufe']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zaubersprueche'); ?></dt>
		<dd>
			<?php echo h($held['Held']['zaubersprueche']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Held'), array('action' => 'edit', $held['Held']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Held'), array('action' => 'delete', $held['Held']['id']), null, __('Are you sure you want to delete # %s?', $held['Held']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Helden'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Held'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Beschreibungen'), array('controller' => 'beschreibungen', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Beschreibung'), array('controller' => 'beschreibungen', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Werte'), array('controller' => 'werte', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wert'), array('controller' => 'werte', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Eigenschaften'), array('controller' => 'eigenschaften', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Eigenschaft'), array('controller' => 'eigenschaften', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sonderfertigkeiten'), array('controller' => 'sonderfertigkeiten', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('controller' => 'sonderfertigkeiten', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Talente'), array('controller' => 'talente', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Vorteile'), array('controller' => 'vorteile', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vorteil'), array('controller' => 'vorteile', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zauber'), array('controller' => 'zauber', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Beschreibungen');?></h3>
	<?php if (!empty($held['Beschreibung'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Held Id'); ?></th>
		<th><?php echo __('Augenfarbe'); ?></th>
		<th><?php echo __('Aussehen'); ?></th>
		<th><?php echo __('Familie'); ?></th>
		<th><?php echo __('Geburtstag'); ?></th>
		<th><?php echo __('Gewicht'); ?></th>
		<th><?php echo __('Groesse'); ?></th>
		<th><?php echo __('Haarfarbe'); ?></th>
		<th><?php echo __('Stand'); ?></th>
		<th><?php echo __('Titel'); ?></th>
		<th><?php echo __('Sozialstatus'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Beschreibung'] as $beschreibung): ?>
		<tr>
			<td><?php echo $beschreibung['id'];?></td>
			<td><?php echo $beschreibung['held_id'];?></td>
			<td><?php echo $beschreibung['augenfarbe'];?></td>
			<td><?php echo $beschreibung['aussehen'];?></td>
			<td><?php echo $beschreibung['familie'];?></td>
			<td><?php echo $beschreibung['geburtstag'];?></td>
			<td><?php echo $beschreibung['gewicht'];?></td>
			<td><?php echo $beschreibung['groesse'];?></td>
			<td><?php echo $beschreibung['haarfarbe'];?></td>
			<td><?php echo $beschreibung['Stand'];?></td>
			<td><?php echo $beschreibung['Titel'];?></td>
			<td><?php echo $beschreibung['sozialstatus'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'beschreibungen', 'action' => 'view', $beschreibung['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'beschreibungen', 'action' => 'edit', $beschreibung['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'beschreibungen', 'action' => 'delete', $beschreibung['id']), null, __('Are you sure you want to delete # %s?', $beschreibung['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Beschreibung'), array('controller' => 'beschreibungen', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Werte');?></h3>
	<?php if (!empty($held['Wert'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Held Id'); ?></th>
		<th><?php echo __('Ap Gesamt'); ?></th>
		<th><?php echo __('Ap Eingesetzt'); ?></th>
		<th><?php echo __('Ap Verfuegbar'); ?></th>
		<th><?php echo __('Gp Start'); ?></th>
		<th><?php echo __('Gp Rest'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Wert'] as $wert): ?>
		<tr>
			<td><?php echo $wert['id'];?></td>
			<td><?php echo $wert['held_id'];?></td>
			<td><?php echo $wert['ap_gesamt'];?></td>
			<td><?php echo $wert['ap_eingesetzt'];?></td>
			<td><?php echo $wert['ap_verfuegbar'];?></td>
			<td><?php echo $wert['gp_start'];?></td>
			<td><?php echo $wert['gp_rest'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'werte', 'action' => 'view', $wert['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'werte', 'action' => 'edit', $wert['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'werte', 'action' => 'delete', $wert['id']), null, __('Are you sure you want to delete # %s?', $wert['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wert'), array('controller' => 'werte', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Eigenschaften');?></h3>
	<?php if (!empty($held['Eigenschaft'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Kurzbezeichnung'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Eigenschaft'] as $eigenschaft): ?>
		<tr>
			<td><?php echo $eigenschaft['id'];?></td>
			<td><?php echo $eigenschaft['kurzbezeichnung'];?></td>
			<td><?php echo $eigenschaft['name'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'eigenschaften', 'action' => 'view', $eigenschaft['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'eigenschaften', 'action' => 'edit', $eigenschaft['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'eigenschaften', 'action' => 'delete', $eigenschaft['id']), null, __('Are you sure you want to delete # %s?', $eigenschaft['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Eigenschaft'), array('controller' => 'eigenschaften', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Sonderfertigkeiten');?></h3>
	<?php if (!empty($held['Sonderfertigkeit'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Art'); ?></th>
		<th><?php echo __('Talent Id'); ?></th>
		<th><?php echo __('Elfenlied'); ?></th>
		<th><?php echo __('Fernkampf Sonderfertigkeit'); ?></th>
		<th><?php echo __('Gelaendekunde'); ?></th>
		<th><?php echo __('Hexenfluch'); ?></th>
		<th><?php echo __('Kampf Sonderfertigkeit'); ?></th>
		<th><?php echo __('Klerikal'); ?></th>
		<th><?php echo __('Liturgie'); ?></th>
		<th><?php echo __('Liturgiekenntnis'); ?></th>
		<th><?php echo __('Magisch'); ?></th>
		<th><?php echo __('Manoever'); ?></th>
		<th><?php echo __('Merkmalskenntnis'); ?></th>
		<th><?php echo __('Nahkampf Sonderfertigkeit'); ?></th>
		<th><?php echo __('Repraesentation'); ?></th>
		<th><?php echo __('Ritual'); ?></th>
		<th><?php echo __('Schamanen Ritualkenntnis'); ?></th>
		<th><?php echo __('Talentspezialisierung'); ?></th>
		<th><?php echo __('Waffenloser Kampfstil'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Sonderfertigkeit'] as $sonderfertigkeit): ?>
		<tr>
			<td><?php echo $sonderfertigkeit['id'];?></td>
			<td><?php echo $sonderfertigkeit['name'];?></td>
			<td><?php echo $sonderfertigkeit['art'];?></td>
			<td><?php echo $sonderfertigkeit['talent_id'];?></td>
			<td><?php echo $sonderfertigkeit['elfenlied'];?></td>
			<td><?php echo $sonderfertigkeit['fernkampf_sonderfertigkeit'];?></td>
			<td><?php echo $sonderfertigkeit['gelaendekunde'];?></td>
			<td><?php echo $sonderfertigkeit['hexenfluch'];?></td>
			<td><?php echo $sonderfertigkeit['kampf_sonderfertigkeit'];?></td>
			<td><?php echo $sonderfertigkeit['klerikal'];?></td>
			<td><?php echo $sonderfertigkeit['liturgie'];?></td>
			<td><?php echo $sonderfertigkeit['liturgiekenntnis'];?></td>
			<td><?php echo $sonderfertigkeit['magisch'];?></td>
			<td><?php echo $sonderfertigkeit['manoever'];?></td>
			<td><?php echo $sonderfertigkeit['merkmalskenntnis'];?></td>
			<td><?php echo $sonderfertigkeit['nahkampf_sonderfertigkeit'];?></td>
			<td><?php echo $sonderfertigkeit['repraesentation'];?></td>
			<td><?php echo $sonderfertigkeit['ritual'];?></td>
			<td><?php echo $sonderfertigkeit['schamanen_ritualkenntnis'];?></td>
			<td><?php echo $sonderfertigkeit['talentspezialisierung'];?></td>
			<td><?php echo $sonderfertigkeit['waffenloser_kampfstil'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'sonderfertigkeiten', 'action' => 'view', $sonderfertigkeit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'sonderfertigkeiten', 'action' => 'edit', $sonderfertigkeit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'sonderfertigkeiten', 'action' => 'delete', $sonderfertigkeit['id']), null, __('Are you sure you want to delete # %s?', $sonderfertigkeit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Sonderfertigkeit'), array('controller' => 'sonderfertigkeiten', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Talente');?></h3>
	<?php if (!empty($held['Talent'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Sprachkomplexitaet'); ?></th>
		<th><?php echo __('Probe1'); ?></th>
		<th><?php echo __('Probe2'); ?></th>
		<th><?php echo __('Probe3'); ?></th>
		<th><?php echo __('Talentart Id'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Talent'] as $talent): ?>
		<tr>
			<td><?php echo $talent['id'];?></td>
			<td><?php echo $talent['name'];?></td>
			<td><?php echo $talent['sprachkomplexitaet'];?></td>
			<td><?php echo $talent['probe1'];?></td>
			<td><?php echo $talent['probe2'];?></td>
			<td><?php echo $talent['probe3'];?></td>
			<td><?php echo $talent['talentart_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'talente', 'action' => 'view', $talent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'talente', 'action' => 'edit', $talent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'talente', 'action' => 'delete', $talent['id']), null, __('Are you sure you want to delete # %s?', $talent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Talent'), array('controller' => 'talente', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Vorteile');?></h3>
	<?php if (!empty($held['Vorteil'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Auswahl'); ?></th>
		<th><?php echo __('Mehrfachauswahl'); ?></th>
		<th><?php echo __('Nachteil'); ?></th>
		<th><?php echo __('Wertvorteil'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Vorteil'] as $vorteil): ?>
		<tr>
			<td><?php echo $vorteil['id'];?></td>
			<td><?php echo $vorteil['name'];?></td>
			<td><?php echo $vorteil['auswahl'];?></td>
			<td><?php echo $vorteil['mehrfachauswahl'];?></td>
			<td><?php echo $vorteil['nachteil'];?></td>
			<td><?php echo $vorteil['wertvorteil'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'vorteile', 'action' => 'view', $vorteil['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'vorteile', 'action' => 'edit', $vorteil['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'vorteile', 'action' => 'delete', $vorteil['id']), null, __('Are you sure you want to delete # %s?', $vorteil['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Vorteil'), array('controller' => 'vorteile', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Zauber');?></h3>
	<?php if (!empty($held['Zauber'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Basiskomplexitaet'); ?></th>
		<th><?php echo __('Lernkomplexitaet'); ?></th>
		<th><?php echo __('Hauszauber'); ?></th>
		<th><?php echo __('Merkmale'); ?></th>
		<th><?php echo __('Probe1'); ?></th>
		<th><?php echo __('Probe2'); ?></th>
		<th><?php echo __('Probe3'); ?></th>
		<th><?php echo __('Kosten'); ?></th>
		<th><?php echo __('Reichweite'); ?></th>
		<th><?php echo __('Wirkungsdauer'); ?></th>
		<th><?php echo __('Zauberdauer'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($held['Zauber'] as $zauber): ?>
		<tr>
			<td><?php echo $zauber['id'];?></td>
			<td><?php echo $zauber['name'];?></td>
			<td><?php echo $zauber['basiskomplexitaet'];?></td>
			<td><?php echo $zauber['lernkomplexitaet'];?></td>
			<td><?php echo $zauber['hauszauber'];?></td>
			<td><?php echo $zauber['Merkmale'];?></td>
			<td><?php echo $zauber['probe1'];?></td>
			<td><?php echo $zauber['probe2'];?></td>
			<td><?php echo $zauber['probe3'];?></td>
			<td><?php echo $zauber['kosten'];?></td>
			<td><?php echo $zauber['reichweite'];?></td>
			<td><?php echo $zauber['wirkungsdauer'];?></td>
			<td><?php echo $zauber['zauberdauer'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'zauber', 'action' => 'view', $zauber['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'zauber', 'action' => 'edit', $zauber['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'zauber', 'action' => 'delete', $zauber['id']), null, __('Are you sure you want to delete # %s?', $zauber['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Zauber'), array('controller' => 'zauber', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
