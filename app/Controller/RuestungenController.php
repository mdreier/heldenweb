<?php
App::uses('AppController', 'Controller');
/**
 * Ruestungen Controller
 *
 * @property Ruestung $Ruestung
 */
class RuestungenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Ruestung);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Ruestung, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Ruestung);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->Ruestung, $id);
	}
}
