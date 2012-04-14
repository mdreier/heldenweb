<?php
App::uses('AppController', 'Controller');
/**
 * HeldenVorteilen Controller
 *
 * @property HeldenVorteil $HeldenVorteil
 */
class HeldenVorteilenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenVorteil);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenVorteil, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenVorteil);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->HeldenVorteil, $id);
	}
}
