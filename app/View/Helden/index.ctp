
<ul data-role="listview" data-filter="true" data-filter-placeholder="Suche Held..." data-inset="true">
	<?php foreach ($helden as $heldendaten) {
		$held = $heldendaten['Held'];
		$werte = $heldendaten['Wert']
		?>

		<li><?php echo $this->Html->link($held['name'], array('controller' => 'Helden', 'action' => 'view', $held['id'])); ?></li>
	<?php } ?>
</ul>
