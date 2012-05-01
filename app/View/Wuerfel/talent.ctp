<h1><?php echo h($talent['name']); ?></h1>

<p>
	Talentwert: <?php echo h($talent['wert']); ?>
	<ul>
		<li><?php echo $this->Wuerfel->ergebnis($probe1); ?></li>
		<li><?php echo $this->Wuerfel->ergebnis($probe2); ?></li>
		<li><?php echo $this->Wuerfel->ergebnis($probe3); ?></li>
	</ul>
</p>
<p>Ergebnis:
<?php if ($fehlschlag == true) { ?>
	<strong>Fehlschlag</strong>
<?php } else { ?>
	<strong>Erfolg</strong> (TaW*: <?php echo $ergebnis ?>)
<?php } ?>
</p>

<a data-rel="back" data-role="button">Schlie&szlig;en</a>