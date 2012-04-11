<?php
App::uses('AppController', 'Controller');
/**
 * Helden Controller
 *
 * @property Held $Held
 */
class HeldenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->Held);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->Held, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		/*
		if ($this->request->is('post')) {
			$this->Held->create();
			if ($this->Held->save($this->request->data)) {
				$this->Session->setFlash(__('The held has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The held could not be saved. Please, try again.'));
			}
		}
		$eigenschaften = $this->Held->Eigenschaft->find('list');
		$sonderfertigkeiten = $this->Held->Sonderfertigkeit->find('list');
		$talente = $this->Held->Talent->find('list');
		$vorteile = $this->Held->Vorteil->find('list');
		$zauber = $this->Held->Zauber->find('list');
		$this->set(compact('eigenschaften', 'sonderfertigkeiten', 'talente', 'vorteile', 'zauber'));
		*/
		$this->addForXml($this->Held);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Held->id = $id;
		if (!$this->Held->exists()) {
			throw new NotFoundException(__('Invalid held'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Held->save($this->request->data)) {
				$this->Session->setFlash(__('The held has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The held could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Held->read(null, $id);
		}
		$eigenschaften = $this->Held->Eigenschaft->find('list');
		$sonderfertigkeiten = $this->Held->Sonderfertigkeit->find('list');
		$talente = $this->Held->Talent->find('list');
		$vorteile = $this->Held->Vorteil->find('list');
		$zauber = $this->Held->Zauber->find('list');
		$this->set(compact('eigenschaften', 'sonderfertigkeiten', 'talente', 'vorteile', 'zauber'));
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
		$this->Held->id = $id;
		if (!$this->Held->exists()) {
			throw new NotFoundException(__('Invalid held'));
		}
		if ($this->Held->delete()) {
			$this->Session->setFlash(__('Held deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Held was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
