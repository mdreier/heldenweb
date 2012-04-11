<?php
App::uses('AppController', 'Controller');
/**
 * Eigenschaften Controller
 *
 * @property Eigenschaft $Eigenschaft
 */
class EigenschaftenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Eigenschaft);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Eigenschaft, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Eigenschaft);
	}
}
