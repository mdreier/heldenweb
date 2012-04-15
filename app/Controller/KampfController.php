<?php
App::uses('AppController', 'Controller');
/**
 * Kampf Controller
 *
 * @property Kampf $Kampf
 */
class KampfController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Kampf);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Kampf, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Kampf);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->Kampf, $id);
	}
}
