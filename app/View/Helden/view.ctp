<ul data-role="listview" data-inset="true">
	<?php echo $this->HeldenDaten->listEntry('Name:', $data['Held']['name']); ?>
	<?php echo $this->HeldenDaten->listEntry('Rasse:', $data['Held']['rasse']); ?>
	<?php echo $this->HeldenDaten->listEntry('Kultur:', $data['Held']['kultur']); ?>
	<?php echo $this->HeldenDaten->listEntry('Profession:', $data['Held']['profession']); ?>
	<!-- Stufe entfernt wg. fehlerhafter Angabe -->
	<?php //echo $this->HeldenDaten->listEntry('Stufe:', $data['Held']['stufe']); ?>

	<li data-theme="a" data-role="divider">Werte</li>
	<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['LE']); ?>
	<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['AsE']); ?>
	<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['KaE']); ?>
	<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['MR']); ?>

	<li data-theme="a">Beschreibung
		<ul>
			<?php echo $this->HeldenDaten->listEntry('Geschlecht:', $data['Held']['geschlecht']); ?>
			<?php echo $this->HeldenDaten->listEntry('Geburtstag:', $data['Beschreibung']['geburtstag']); ?>
			<?php echo $this->HeldenDaten->listEntry('Größe:', $data['Beschreibung']['groesse']); ?>
			<?php echo $this->HeldenDaten->listEntry('Gewicht:', $data['Beschreibung']['gewicht']); ?>
			<?php echo $this->HeldenDaten->listEntry('Haarfarbe:', $data['Beschreibung']['haarfarbe']); ?>
			<?php echo $this->HeldenDaten->listEntry('Augenfarbe:', $data['Beschreibung']['augenfarbe']); ?>
			<?php echo $this->HeldenDaten->listEntry('Aussehen:', $data['Beschreibung']['aussehen']); ?>
			<?php echo $this->HeldenDaten->listEntry('Stand:', $data['Beschreibung']['stand']); ?>
			<?php echo $this->HeldenDaten->listEntry('Titel:', $data['Beschreibung']['titel']); ?>
			<?php echo $this->HeldenDaten->listEntry('Familie:', $data['Beschreibung']['familie']); ?>
		</ul>
	</li>

	<li data-theme="a">Vorteile &amp; Nachteile
		<ul>
			<?php foreach ($data["Vorteil"] as $vorteil) {
				$art = 'Vorteil';
				if ($this->HeldenDaten->isTrue($vorteil['nachteil'])) {
					$art = 'Nachteil';
				}
				?>
				<li>
					<?php echo $vorteil['name']?>
					<span class="ui-li-count"><?php echo $art; ?></span>
				</li>
			<?php } ?>
		</ul>
	</li>

	<li data-theme="a">Eigenschaften
		<ul>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['MU']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['KL']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['IN']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['CH']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['FF']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['GE']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['KO']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['KK']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['GS']); ?>
		</ul>
	</li>

	<li data-theme="a">Basiswerte
		<ul>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['AU']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['INI']); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['AT'], 'Attacke-Basis'); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['PA'], 'Parade-Basis'); ?>
			<?php echo $this->HeldenDaten->eigenschaft($eigenschaften['FK']); ?>
		</ul>
	</li>

	<li data-theme="a">Abenteuerpunkte
		<ul>
			<?php echo $this->HeldenDaten->listEntry('Gesamt:', $data['Wert']['ap_gesamt']); ?>
			<?php echo $this->HeldenDaten->listEntry('Eingesetzt:', $data['Wert']['ap_eingesetzt']); ?>
			<?php echo $this->HeldenDaten->listEntry('Guthaben:', $data['Wert']['ap_verfuegbar']); ?>
			<?php echo $this->HeldenDaten->listEntry('GP:', $data['Wert']['gp_start']); ?>
			<?php echo $this->HeldenDaten->listEntry('GP-Rest:', $data['Wert']['gp_rest']); ?>
		</ul>
	</li>

	<?php echo $this->HeldenDaten->listEntry('Zuletzt synchronisiert:', $this->Time->format('j.m.Y H:i:s', $data['Held']['modified'])); ?>
</ul>