<?php
App::uses('AppHelper', 'View/Helper');

class WuerfelHelper extends AppHelper {
	public $helpers = array('Html');

	public function ergebnis($probe) {
		return h($probe['eigenschaft']) . '&nbsp;(' . h($probe['wert']) . '):&nbsp;' . $probe['wurf'];
	}
}

?>