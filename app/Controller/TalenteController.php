<?php
App::uses('AppController', 'Controller');
/**
 * Talente Controller
 *
 * @property Talent $Talent
 */
class TalenteController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Talent->recursive = 0;
		$this->set('talente', $this->paginate());
		$talente['talente'] = $this->Talent->find('all');
		$this->set('talenteForXml', $talente);
		$this->set('_serialize', 'talenteForXml');
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
		$this->set('talent', $this->Talent->read(null, $id));
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
				$this->Session->setFlash(__('The talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The talent could not be saved. Please, try again.'));
			}
		}
		$talentarten = $this->Talent->Talentart->find('list');
		$probe1en = $this->Talent->Probe1->find('list');
		$probe2en = $this->Talent->Probe2->find('list');
		$probe3en = $this->Talent->Probe3->find('list');
		$this->set(compact('talentarten', 'probe1en', 'probe2en', 'probe3en'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Talent->id = $id;
		if (!$this->Talent->exists()) {
			throw new NotFoundException(__('Invalid talent'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Talent->save($this->request->data)) {
				$this->Session->setFlash(__('The talent has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The talent could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Talent->read(null, $id);
		}
		$talentarten = $this->Talent->Talentart->find('list');
		$probe1en = $this->Talent->Probe1->find('list');
		$probe2en = $this->Talent->Probe2->find('list');
		$probe3en = $this->Talent->Probe3->find('list');
		$this->set(compact('talentarten', 'probe1en', 'probe2en', 'probe3en'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Talent->id = $id;
		if (!$this->Talent->exists()) {
			throw new NotFoundException(__('Invalid talent'));
		}
		if ($this->Talent->delete()) {
			$this->Session->setFlash(__('Talent deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Talent was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
