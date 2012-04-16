<?php
App::uses('AppController', 'Controller');
/**
 * Gegenstaende Controller
 *
 * @property Gegenstand $Gegenstand
 */
class GegenstaendeController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Gegenstand);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Gegenstand, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Gegenstand);
	}

/**
 * edit method
 *
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->Gegenstand, $id);
	}
}
