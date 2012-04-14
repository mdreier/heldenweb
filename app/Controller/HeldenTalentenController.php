<?php
App::uses('AppController', 'Controller');
/**
 * HeldenTalenten Controller
 *
 * @property HeldenTalent $HeldenTalent
 */
class HeldenTalentenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenTalent);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenTalent, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenTalent);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->HeldenTalent, $id);
	}
}
