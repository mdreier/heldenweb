<ul data-role="listview" data-inset="true" data-divider-theme="e">
	<li data-role="list-divider" >Geld</li>
	<?php if ($muenzGruppen) {
		foreach($muenzen as $waehrung => $muenzArten) {
	?>
	<li><?php echo h($waehrung); ?>
		<ul>
			<?php foreach($muenzArten as $muenzArt => $anzahl) {
				echo $this->HeldenDaten->listEntry($muenzArt, $anzahl);
			 } ?>
		</ul>
	</li>

	<?php }
		} else {
			foreach($muenzen[$hauptMuenzArt] as $muenzArt => $anzahl) {
				echo $this->HeldenDaten->listEntry($muenzArt, $anzahl);
			 }
		}
	?>
</ul>

<ul data-role="listview" data-inset="true" data-count-theme="b">
	<?php
	$gewichtAlles = 0;
	foreach ($gegenstaende as $gegenstand) {
		$gegenstandName = $gegenstand['name'];
		if (isset($gegenstand['anzeigename']) && $gegenstand['anzeigename'] != "") {
			$gegenstandName = $gegenstand['anzeigename'];
		}
		$gesamtgewicht = $gegenstand['gewicht'] * $gegenstand['anzahl'];
		$gewichtAlles += $gesamtgewicht;
	?>
	<li>
		<h3><?php echo $gegenstandName ?></h3>
		<p><?php echo $this->HeldenDaten->listEntry('Gewicht', $gegenstand['gewicht'] . " Unzen (Gesamt: " . $gesamtgewicht . " Unzen)", false) ?></p>
		<p><?php echo $this->HeldenDaten->listEntry('Preis', $gegenstand['preis'] . " Heller", false); ?></p>
		<p class="ui-li-count"><?php echo $gegenstand['anzahl']; ?></p>
	</li>
	<?php } ?>
	<li data-theme="b">Gesamtgewicht: <?php echo $gewichtAlles / 100; ?> Stein</li>
</ul>