<?php
App::uses('AppController', 'Controller');
/**
 * Vorteile Controller
 *
 * @property Vorteil $Vorteil
 */
class VorteileController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Vorteil);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Vorteil, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Vorteil);
	}
}
