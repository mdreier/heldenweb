<?php
App::uses('AppController', 'Controller');
/**
 * EigenschaftenHelden Controller
 *
 * @property EigenschaftenHeld $EigenschaftenHeld
 */
class EigenschaftenHeldenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->EigenschaftenHeld);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->EigenschaftenHeld, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->EigenschaftenHeld);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->EigenschaftenHeld, $id);
	}
}
