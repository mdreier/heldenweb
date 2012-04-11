<?php
App::uses('AppController', 'Controller');
/**
 * Talentarten Controller
 *
 * @property Talentart $Talentart
 */
class TalentartenController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Talentart);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Talentart, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Talentart);
	}
}
