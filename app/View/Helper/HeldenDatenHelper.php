<?php
App::uses('AppHelper', 'View/Helper');

class HeldenDatenHelper extends AppHelper {
	public $helpers = array('Html');

	public function linesToList($text) {
		$lines = preg_split("/\\n/", $text);
		$returnValue = "";
		for ($i = 0; $i < count($lines); $i++) {
			$returnValue .= h($lines[$i]);
			if ($i < count($lines) - 1) {
				$returnValue .= ", ";
			}
		}
		return $returnValue;
	}

	public function zauberMitRepraesentation($zauber) {
		$splitPos = strrpos($zauber, "[");
		$endPos = strrpos($zauber, "]");
		if ($splitPos === false || $endPos === false) {
			return array ($zauber, "");
		}
		return array(substr($zauber, 0, $splitPos), substr($zauber, $splitPos + 1, $endPos - $splitPos - 1));
	}

	public function toMultiLineHtml($text) {
		$lines = preg_split("/\\n/", $text);
		$returnValue = "";
		for ($i = 0; $i < count($lines); $i++) {
			$returnValue .= h($lines[$i]);
			if ($i < count($lines) - 1) {
				$returnValue .= "<br />";
			}
		}
		return $returnValue;
	}

    public function listEntry($label, $value, $withLi = true) {

    	return ($withLi ? "<li>" : "")
    			. "<span class=\"hw-list-entry-title\">"
    			. h($label)
    			. "</span><span class=\"hw-list-entry\">"
    			. h($value)
    			. "</span>"
    			. ($withLi ? "</li>" : "");
    }

    public function isTrue($value) {
    	return $value != 0;
    }

    public function eigenschaft($eigenschaft, $label = null) {

    	if ($label == null) {
    		$label = $eigenschaft['name'];
    	}
    	return "<li><span class=\"hw-list-entry-title\">"
    			. h($label)
    			. "</span><span class=\"hw-list-subtitle\">"
    			. h($eigenschaft['kurz'])
    			. "</span><span class=\"hw-list-entry\">"
    			. h($eigenschaft['wert'])
    			. "</span></li>";
	}

	public function talent($talent, $behinderung = false, $kampf = false, $sprache = false) {
		$tag = "<li data-filtertext=\"" . $talent['name'] . "\">";

		$tag .= "<h3>" . h($talent['name']) . ": " . h($talent['wert']) . "</h3>";
		if ($sprache) {
			$tag .= "<p>Sprachkomplexität: " . $talent['sprachkomplexitaet']. "</p>";
		} else if ($kampf) {
			$tag .= "<p>Attacke: " . $talent['attacke'] . "&nbsp;/&nbsp;";
			$tag .= "Parade: " . $talent['parade'] . "</p>";
		} else {
			if ($talent['hatProbe'] == true) {
				$tag .= "<p>Probe: " . $talent['probe1_eigenschaft'] . "/" . $talent['probe2_eigenschaft'] . "/" . $talent['probe3_eigenschaft'];
				$tag .= " (" . $talent['probe1_wert'] . "/" . $talent['probe2_wert'] . "/" . $talent['probe3_wert'] . ")</p>";
			}
		}
		if ($behinderung) {
			if ($talent['behinderung'] == "") {
				$talent['behinderung'] = '&mdash;';
			}
			$tag .= "<span class=\"ui-li-count\">" . $talent['behinderung'] . "</span>";
		}
		$tag .= "</li>";
		return $tag;
	}

	public function ruestung($ruestung, $sum = false) {
		$return = "";
		$return .= "<li";
		if ($sum) {
			$return .= " data-theme=\"e\" ";
		}
		$return .= ">";
		$return .= "<h3>" . $ruestung['name'] . "</h3>";
		$return .= "<p>" . $this->listEntry('Rüstschutz', $ruestung['schutz_gesamt'], false) . "</p>";
		$return .= "<p>" . $this->listEntry('Behinderung', $ruestung['behinderung_gesamt'], false) . "</p>";
		$return .= "<ul>";
		$return .= $this->listEntry('Kopf', $ruestung['schutz_kopf']);
		$return .= $this->listEntry('Brust', $ruestung['schutz_brust']);
		$return .= $this->listEntry('Bauch', $ruestung['schutz_bauch']);
		$return .= $this->listEntry('Rücken', $ruestung['schutz_ruecken']);
		$return .= $this->listEntry('Linker Arm', $ruestung['schutz_arm_links']);
		$return .= $this->listEntry('Rechter Arm', $ruestung['schutz_arm_rechts']);
		$return .= $this->listEntry('Linkes Bein', $ruestung['schutz_bein_links']);
		$return .= $this->listEntry('Rechtes Bein', $ruestung['schutz_bein_rechts']);
		$return .= "</ul>\n</li>";
		return $return;
	}

	public function waffenmodifikator($attacke, $parade) {
		return "Attacke: " . sprintf("%+d", $attacke) . " / Parade: " . sprintf("%+d", $parade);
	}

	public function bruchfaktor($aktuell, $minimal) {
		return $aktuell . " (Minimal: " . $minimal . ")";
	}
}
?>