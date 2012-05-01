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
		$link = false;
		$text = "<h3>" . h($talent['name']) . ": " . h($talent['wert']) . "</h3>";
		if ($sprache) {
			$text .= "<p>Sprachkomplexität: " . $talent['sprachkomplexitaet']. "</p>";
		} else if ($kampf) {
			$text .= "<p>Attacke: " . $talent['attacke'] . "&nbsp;/&nbsp;";
			$text .= "Parade: " . $talent['parade'] . "</p>";
		} else {
			if ($talent['hatProbe'] == true) {
				$text .= "<p>Probe: " . $talent['probe1_eigenschaft'] . "/" . $talent['probe2_eigenschaft'] . "/" . $talent['probe3_eigenschaft'];
				$text .= " (" . $talent['probe1_wert'] . "/" . $talent['probe2_wert'] . "/" . $talent['probe3_wert'] . ")</p>";
				$link = true;
			}
		}
		if ($behinderung) {
			if ($talent['behinderung'] == "") {
				$talent['behinderung'] = '&mdash;';
			}
			$text .= "<span class=\"ui-li-count\">" . $talent['behinderung'] . "</span>";
		}
		if ($link) {
			$tag .= $this->linkToDiceRollerForTalent($text, $talent);
		} else {
			$tag .= $text;
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

	private function linkToDiceRollerForTalent($text, $talent, $button = false) {
		return $this->linkToDiceRoller($text, $talent['name'], $talent['wert'], $talent['probe1'], $talent['probe2'], $talent['probe3'], $button);
	}

	public function linkToDiceRoller($text, $talentname, $talentwert, $probe1, $probe2, $probe3, $button = false) {
		$routing = array('controller' => 'Wuerfel', 'action' => 'talent');

		$this->makeLinkSave($probe1);
		$this->makeLinkSave($probe2);
		$this->makeLinkSave($probe3);
		$routing['probe1'] = $probe1;
		$routing['probe2'] = $probe2;
		$routing['probe3'] = $probe3;
		$routing['talentwert'] = $this->urlencode($talentwert);
		$routing['talentname'] = $this->urlencode($talentname);

		$options = array('data-rel' => 'dialog', 'escape' => false, 'data-transition' => 'pop');
		if ($button) {
			$options['data-role'] = 'button';
		}
		return $this->Html->link($text, $routing, $options);
	}

	private function makeLinkSave(&$probe) {
		$probe['wert'] = $this->urlencode($probe['wert']);
		$probe['eigenschaft'] = $this->urlencode($probe['eigenschaft']);
	}

	/**
	 * This function encodes the text using <code>urlencode()</code>.
	 * Forward slashes are double-encoded.
	 *
	 * @param String $text
	 */
	private function urlencode($text) {
		return urlencode(str_replace('/', '%2f', $text));
	}
}
?>