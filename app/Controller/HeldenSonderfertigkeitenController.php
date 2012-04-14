<?php
App::uses('AppController', 'Controller');
/**
 * HeldenSonderfertigkeiten Controller
 *
 * @property HeldenSonderfertigkeit $HeldenSonderfertigkeit
 */
class HeldenSonderfertigkeitenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenSonderfertigkeit);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenSonderfertigkeit, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenSonderfertigkeit);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->HeldenSonderfertigkeit, $id);
	}
}
