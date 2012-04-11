<?php
App::uses('AppController', 'Controller');
/**
 * Zauber Controller
 *
 * @property Zauber $Zauber
 */
class ZauberController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Zauber);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Zauber, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Zauber);
	}
}
