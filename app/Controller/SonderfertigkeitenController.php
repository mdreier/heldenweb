<?php
App::uses('AppController', 'Controller');
/**
 * Sonderfertigkeiten Controller
 *
 * @property Sonderfertigkeit $Sonderfertigkeit
 */
class SonderfertigkeitenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Sonderfertigkeit);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Sonderfertigkeit, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Sonderfertigkeit);
	}
}
