<?php
App::uses('AppController', 'Controller');
/**
 * Talente Controller
 *
 * @property Talent $Talent
 */
class TalenteController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Talent);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Talent, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->Talent);
	}
}
