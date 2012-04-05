<?php
App::uses('AppController', 'Controller');
/**
 * EigenschaftenHelden Controller
 *
 * @property EigenschaftenHeld $EigenschaftenHeld
 */
class EigenschaftenHeldenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EigenschaftenHeld->recursive = 0;
		$this->set('eigenschaftenHelden', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->EigenschaftenHeld->id = $id;
		if (!$this->EigenschaftenHeld->exists()) {
			throw new NotFoundException(__('Invalid eigenschaften held'));
		}
		$this->set('eigenschaftenHeld', $this->EigenschaftenHeld->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EigenschaftenHeld->create();
			if ($this->EigenschaftenHeld->save($this->request->data)) {
				$this->Session->setFlash(__('The eigenschaften held has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eigenschaften held could not be saved. Please, try again.'));
			}
		}
		$helden = $this->EigenschaftenHeld->Held->find('list');
		$eigenschaften = $this->EigenschaftenHeld->Eigenschaft->find('list');
		$this->set(compact('helden', 'eigenschaften'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->EigenschaftenHeld->id = $id;
		if (!$this->EigenschaftenHeld->exists()) {
			throw new NotFoundException(__('Invalid eigenschaften held'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->EigenschaftenHeld->save($this->request->data)) {
				$this->Session->setFlash(__('The eigenschaften held has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eigenschaften held could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->EigenschaftenHeld->read(null, $id);
		}
		$helden = $this->EigenschaftenHeld->Held->find('list');
		$eigenschaften = $this->EigenschaftenHeld->Eigenschaft->find('list');
		$this->set(compact('helden', 'eigenschaften'));
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
		$this->EigenschaftenHeld->id = $id;
		if (!$this->EigenschaftenHeld->exists()) {
			throw new NotFoundException(__('Invalid eigenschaften held'));
		}
		if ($this->EigenschaftenHeld->delete()) {
			$this->Session->setFlash(__('Eigenschaften held deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eigenschaften held was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
