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
		$this->Eigenschaft->recursive = 0;
		$talente = $this->Eigenschaft->find('all');
		$xml['eigenschaften'] = array();
		foreach ($talente as $talent) {
			$xml['eigenschaften']['eigenschaft'][] = $talent['Eigenschaft'];
		}
		$this->set('eigenschaften', $xml);
		$this->set('_serialize', 'eigenschaften');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Eigenschaft->id = $id;
		if (!$this->Eigenschaft->exists()) {
			throw new NotFoundException(__('Invalid eigenschaft'));
		}
		$talent = $this->Eigenschaft->read(null, $id);
		$xml['eigenschaft'] = $talent['Eigenschaft'];
		$this->set('eigenschaft', $xml);
		$this->set('_serialize', 'eigenschaft');
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Eigenschaft->create();
			if ($this->Eigenschaft->save($this->request->data)) {
				$xml['eigenschaft']['id'] = $this->Eigenschaft->id;
				$xml['eigenschaft']['name'] = $this->Eigenschaft->name;
				$this->set('eigenschaft', $xml);
				$this->set('_serialize', 'eigenschaft');
			} else {
				$this->response->statusCode(400);
			}
		}
	}
}
