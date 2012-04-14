<?php
App::uses('AppController', 'Controller');
/**
 * HeldenZauber Controller
 *
 * @property HeldenZauber $HeldenZauber
 */
class HeldenZauberController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenZauber);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenZauber, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenZauber);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->editForXml($this->HeldenZauber, $id);
	}
}
