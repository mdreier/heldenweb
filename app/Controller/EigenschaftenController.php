<?php
App::uses('AppController', 'Controller');
/**
 * Eigenschaften Controller
 *
 * @property Eigenschaft $Eigenschaft
 */
class EigenschaftenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Eigenschaft->recursive = 0;
		$this->set('eigenschaften', $this->paginate());
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
		$this->set('eigenschaft', $this->Eigenschaft->read(null, $id));
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
				$this->Session->setFlash(__('The eigenschaft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eigenschaft could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Eigenschaft->id = $id;
		if (!$this->Eigenschaft->exists()) {
			throw new NotFoundException(__('Invalid eigenschaft'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Eigenschaft->save($this->request->data)) {
				$this->Session->setFlash(__('The eigenschaft has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The eigenschaft could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Eigenschaft->read(null, $id);
		}
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
		$this->Eigenschaft->id = $id;
		if (!$this->Eigenschaft->exists()) {
			throw new NotFoundException(__('Invalid eigenschaft'));
		}
		if ($this->Eigenschaft->delete()) {
			$this->Session->setFlash(__('Eigenschaft deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Eigenschaft was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
