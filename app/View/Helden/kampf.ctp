<ul data-role="listview">

	<?php echo $this->HeldenDaten->listEntry('Ausweichen', $data['Kampf']['ausweichen']); ?>
	<?php echo $this->HeldenDaten->listEntry('Initiative', $eigenschaften['INI']['wert']); ?>

	<li>
		<h3>Raufen</h3>
		<p><?php echo $this->HeldenDaten->listEntry('Attacke', $data['Kampf']['raufen_attacke'], false); ?></p>
		<p><?php echo $this->HeldenDaten->listEntry('Parade', $data['Kampf']['raufen_parade'], false); ?></p>
		<p><?php echo $this->HeldenDaten->listEntry('Trefferpunkte (A)', $data['Kampf']['raufen_trefferpunkte'], false); ?></p>
	</li>

	<li>
		<h3>Ringen</h3>
		<p><?php echo $this->HeldenDaten->listEntry('Attacke', $data['Kampf']['ringen_attacke'], false); ?></p>
		<p><?php echo $this->HeldenDaten->listEntry('Parade', $data['Kampf']['ringen_parade'], false); ?></p>
		<p><?php echo $this->HeldenDaten->listEntry('Trefferpunkte (A)', $data['Kampf']['ringen_trefferpunkte'], false); ?></p>
	</li>

	<li data-theme="a">Nahkampf (<?php echo count($data['Nahkampfwaffe']); ?>)
		<ul>
		<?php foreach ($data['Nahkampfwaffe'] as $nahkampfwaffe) { ?>
			<li>
				<h3><?php echo $nahkampfwaffe['name']; ?></h3>
				<table class="ui-li-aside">
					<thead>
						<tr><td>Attacke</td><td>Parade</td><td>Trefferpunkte</td><td>KK-Zuschlag</td></tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $nahkampfwaffe['attacke']; ?></td>
							<td><?php echo $nahkampfwaffe['parade']; ?></td>
							<td><?php
								if ($nahkampfwaffe['trefferpunkte_final'] != "") {
									echo $nahkampfwaffe['trefferpunkte_final'];
								} else {
									echo $nahkampfwaffe['trefferpunkte'];
		 						}?> </td>
							<td><?php echo $nahkampfwaffe['koerperkraftzuschlag']; ?></td>
						</tr>
					</tbody>
				</table>
				<p><?php echo $this->HeldenDaten->listEntry('Bruchfaktor', $this->HeldenDaten->bruchfaktor($nahkampfwaffe['bruchfaktor_aktuell'], $nahkampfwaffe['bruchfaktor_minimal']), false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Distanzklasse', $nahkampfwaffe['distanzklasse'], false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Ausdauerschaden', $nahkampfwaffe['ausdauerschaden'] ? 'Ja' : 'Nein', false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Waffenmodifikator', $this->HeldenDaten->waffenmodifikator($nahkampfwaffe['waffenmodifikator_attacke'], $nahkampfwaffe['waffenmodifikator_parade']), false); ?></p>
			</li>
		<?php } ?>
		</ul>
	</li>

	<li data-theme="a">Fernkampf (<?php echo count($data['Fernkampfwaffe']); ?>)
		<ul>
		<?php foreach ($data['Fernkampfwaffe'] as $fernkampfwaffe) { ?>
			<li>
				<h3><?php echo $fernkampfwaffe['name']; ?></h3>
				<p><?php echo $this->HeldenDaten->listEntry('Fernkampfwert', $fernkampfwaffe['fernkampfwert'], false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Trefferpunkte', $fernkampfwaffe['trefferpunkte'], false); ?></p>
				<?php if ($fernkampfwaffe['ladezeit'] >= 0) { ?>
					<p><?php echo $this->HeldenDaten->listEntry('Ladezeit', $fernkampfwaffe['ladezeit'] . ' Aktionen', false); ?></p>
				<?php } ?>
				<p><?php echo $this->HeldenDaten->listEntry('Munitionsart', $fernkampfwaffe['munitionsart'], false); ?></p>
				<?php
					$reichweite = $fernkampfwaffe['reichweite0']
							. ' Schritt (' . sprintf("%+d TP", $fernkampfwaffe['trefferpunkte0']) . '), '
							. $fernkampfwaffe['reichweite1']
							. ' Schritt (' . sprintf("%+d TP", $fernkampfwaffe['trefferpunkte1']) . '), '
							. $fernkampfwaffe['reichweite2']
							. ' Schritt (' . sprintf("%+d TP", $fernkampfwaffe['trefferpunkte2']) . '), '
							. $fernkampfwaffe['reichweite3']
							. ' Schritt (' . sprintf("%+d TP", $fernkampfwaffe['trefferpunkte3']) . '), '
							. $fernkampfwaffe['reichweite4']
							. ' Schritt (' . sprintf("%+d TP", $fernkampfwaffe['trefferpunkte4']) . ')'
							?>
				<p><?php echo $this->HeldenDaten->listEntry('Reichweite', $reichweite, false); ?></p>
			</li>
		<?php } ?>
		</ul>
	</li>

	<li data-theme="a">Rüstung (<?php echo count($data['Ruestung']) - 1; ?>)
		<ul>
		<?php
		$ruestungGesamt = null;
		foreach ($data['Ruestung'] as $ruestung) {
			if ($ruestung['gesamt']) {
				$ruestungGesamt = $ruestung;
				continue;
			}
			echo $this->HeldenDaten->ruestung($ruestung);
		}
		if ($ruestungGesamt != null) {
			$ruestungGesamt['name'] = "Summe";
			echo $this->HeldenDaten->ruestung($ruestungGesamt, true);
		}
		?>
		</ul>
	</li>

	<li data-theme="a">Schilde / Parierwaffen (<?php echo count($data['Schild']); ?>)
		<ul>
		<?php foreach ($data['Schild'] as $schild) { ?>
			<li>
				<h3><?php echo $schild['name']; ?></h3>
				<p><?php echo $this->HeldenDaten->listEntry('Art', $schild['art'], false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Parade', $schild['parade'], false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('INI-Modifikator', $schild['inimodifikator'], false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Waffenmodifikator', $this->HeldenDaten->waffenmodifikator($schild['waffenmodifikator_attacke'], $schild['waffenmodifikator_parade']), false); ?></p>
				<p><?php echo $this->HeldenDaten->listEntry('Bruchfaktor', $this->HeldenDaten->bruchfaktor($schild['bruchfaktor_aktuell'], $schild['bruchfaktor_minimal']), false); ?></p>
			</li>
		<?php } ?>
		</ul>
	</li>

</ul>