<?php
App::uses('AppHelper', 'View/Helper');

class HeldenNavHelper extends AppHelper {
	public $helpers = array('Html');

    public function makeNavEntry($name, $action, $heldId, $selection = null) {
    	if (!isset($selection) || is_null($selection) || empty($selection)) {
    		$selection = view;
    	}
    	$options = array();
    	if ($action == $selection) {
    		$options['class'] = 'ui-btn-active';
    	}
		return $this->Html->link($name, array('action' => $action, $heldId), $options);
    }
}
?>