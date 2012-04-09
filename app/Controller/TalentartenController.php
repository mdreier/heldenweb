<?php
App::uses('AppController', 'Controller');
/**
 * Talentarten Controller
 *
 * @property Talentart $Talentart
 */
class TalentartenController extends AppController {

	public $components = array('RequestHandler');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Talentart->recursive = 0;
		$talente = $this->Talentart->find('all');
		$xml['talentarten'] = array();
		foreach ($talente as $talent) {
			$xml['talentarten']['talentart'][] = $talent['Talentart'];
		}
		$this->set('talentarten', $xml);
		$this->set('_serialize', 'talentarten');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Talentart->id = $id;
		if (!$this->Talentart->exists()) {
			throw new NotFoundException(__('Invalid talentart'));
		}
		$talent = $this->Talentart->read(null, $id);
		$xml['talentart'] = $talent['Talentart'];
		$this->set('talentart', $xml);
		$this->set('_serialize', 'talentart');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Talentart->create();
			if ($this->Talentart->save($this->request->data)) {
				$xml['talentart']['id'] = $this->Talentart->id;
				$xml['talentart']['name'] = $this->Talentart->name;
				$this->set('talentart', $xml);
				$this->set('_serialize', 'talentart');
			} else {
				$this->response->statusCode(400);
			}
		}
	}
}
