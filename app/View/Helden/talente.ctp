<ul data-role="listview" data-filter="true" data-filter-placeholder="Suche Talent...">
	<?php foreach ($talentarten as $talentart => $talentartDaten) { ?>
		<li data-role="list-divider"><?php echo $talentart; ?></li>
		<?php foreach ($talentartDaten['talente'] as $talent) {
			echo $this->HeldenDaten->talent($talent, $talentartDaten['behinderung'], $talentartDaten['kampf'], $talentartDaten['sprache']);
	      }
		}
	?>
</ul>