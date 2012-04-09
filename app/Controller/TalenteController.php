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
		$this->Talent->recursive = 0;
		$talente = $this->Talent->find('all');
		$xml['talente'] = array();
		foreach ($talente as $talent) {
			$xml['talente']['talent'][] = $talent['Talent'];
		}
		$this->set('talente', $xml);
		$this->set('_serialize', 'talente');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Talent->id = $id;
		if (!$this->Talent->exists()) {
			throw new NotFoundException(__('Invalid talent'));
		}
		$talent = $this->Talent->read(null, $id);
		$xml['talent'] = $talent['Talent'];
		$this->set('talent', $xml);
		$this->set('_serialize', 'talent');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Talent->create();
			if ($this->Talent->save($this->request->data)) {
				$xml['talent']['id'] = $this->Talent->id;
				$xml['talent']['name'] = $this->Talent->name;
				$this->set('talent', $xml);
				$this->set('_serialize', 'talent');
			} else {
				$this->response->statusCode(400);
			}
		}
	}
}
