<ul data-role="listview" data-filter="true" data-filter-placeholder="Suche Zauber...">
	<?php
	foreach ($zauberliste as $zauber) {
		$zaubername = $this->HeldenDaten->zauberMitRepraesentation($zauber['name']);
	?>

	<li><?php echo $zaubername[0] ?>
		<ul>
			<?php
			echo $this->HeldenDaten->listEntry('Repräsentation', $zauber['repraesentation']);
			echo $this->HeldenDaten->listEntry('Fertigkeitswert', $zauber['wert']);
			$probe = $zauber['probe1_eigenschaft'] . "/" . $zauber['probe2_eigenschaft'] . "/" . $zauber['probe3_eigenschaft'];
			$probe .= " (" . $zauber['probe1_wert'] . "/" . $zauber['probe2_wert'] . "/" . $zauber['probe3_wert'] . ")";
			echo $this->HeldenDaten->listEntry('Probe', $probe);
			echo $this->HeldenDaten->listEntry('Merkmale', $this->HeldenDaten->linesToList($zauber['merkmale']));
			echo $this->HeldenDaten->listEntry('Kosten', $zauber['kosten']);
			echo $this->HeldenDaten->listEntry('Reichweite', $zauber['reichweite']);
			echo $this->HeldenDaten->listEntry('Wirkungsdauer', $zauber['wirkungsdauer']);
			echo $this->HeldenDaten->listEntry('Zauberdauer', $zauber['zauberdauer']);
			echo $this->HeldenDaten->listEntry('Basiskomplexität', $zauber['basiskomplexitaet']);
			echo $this->HeldenDaten->listEntry('Lernkomplexität', $zauber['lernkomplexitaet']);
			if ($zauber['hauszauber']) {
				echo "<li>Hauszauber</li>";
			}
			?>
		</ul>
	</li>

	<?php } ?>
</ul>