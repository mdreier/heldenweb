<?php
App::uses('AppController', 'Controller');
/**
 * Fernkampfwaffen Controller
 *
 * @property Fernkampfwaffe $Fernkampfwaffe
 */
class FernkampfwaffenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Fernkampfwaffe);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Fernkampfwaffe, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Fernkampfwaffe);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->Fernkampfwaffe, $id);
	}
}
