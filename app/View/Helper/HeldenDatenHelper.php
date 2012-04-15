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

    public function listEntry($label, $value) {

    	return "<li><span class=\"hw-list-entry-title\">"
    			. h($label)
    			. "</span><span class=\"hw-list-entry\">"
    			. h($value)
    			. "</span></li>";
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

		$tag .= "<h3>" . $talent['name'] . ": " . $talent['wert'] . "</h3>";
		if ($sprache) {
			$tag .= "<p>Sprachkomplexität: " . $talent['sprachkomplexitaet']. "</p>";
		} else if ($kampf) {
			$tag .= "<p>Attacke: " . $talent['attacke'] . "</p>";
			$tag .= "<p>Parade: " . $talent['parade'] . "</p>";
		} else {
			$tag .= "<p>Probe: " . $talent['probe1_eigenschaft'] . "/" . $talent['probe2_eigenschaft'] . "/" . $talent['probe3_eigenschaft'];
			$tag .= " (" . $talent['probe1_wert'] . "/" . $talent['probe2_wert'] . "/" . $talent['probe3_wert'] . ")</p>";
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
}
?>