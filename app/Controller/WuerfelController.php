<?php

App::uses('AppController', 'Controller');
/**
 * Wuerfel Controller.
 */
class WuerfelController extends AppController {
	public $helpers = array('Wuerfel');

	public function talent() {
		//Get request parameters
		$params = $this->request->query;
		if (isset($this->request->named['probe1'])) {
			$params = $this->request->named;
		}

		$probe1 = $params['probe1'];
		$probe2 = $params['probe2'];
		$probe3 = $params['probe3'];

		//Parameters were double-encoded to prevent problems with forward slashes
		$talentwert = urldecode(urldecode($params['talentwert']));
		$talentname = urldecode(urldecode($params['talentname']));
		$talent = array('name' => $talentname, 'wert' => $talentwert);
		$this->set('talent', $talent);

		$this->set('titel', 'W&uuml;rfelergebnis');
		$this->layout = 'dialog';

		//Calculate result of rolls
		$ergebnis = $talentwert;
		$ergebnis -= $this->wuerfleProbe($probe1);
		$ergebnis -= $this->wuerfleProbe($probe2);
		$ergebnis -= $this->wuerfleProbe($probe3);
		if ($ergebnis == 0) {
			$ergebnis = 1;
		}

		if ($ergebnis < 0) {
			$fehlschlag = true;
		} else {
			$fehlschlag = false;
		}

		//Set results
		$this->set('probe1', $probe1);
		$this->set('probe2', $probe2);
		$this->set('probe3', $probe3);
		$this->set('ergebnis', $ergebnis);
		$this->set('fehlschlag', $fehlschlag);

		//Disable cache
		$this->response->disableCache();
	}

	private function wuerfleProbe(&$probe) {
		$wurf = $this->wuerfle(20);
		$probe['wurf'] = $wurf;
		if ($wurf < $probe['wert']) {
			return 0;
		} else {
			return $wurf - $probe['wert'];
		}
	}

	private function wuerfle($wuerfel) {
		return mt_rand(1, $wuerfel);
	}
}

?>