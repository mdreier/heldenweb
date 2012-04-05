<?php
App::uses('AppController', 'Controller');
/**
 * Vorteile Controller
 *
 * @property Vorteil $Vorteil
 */
class VorteileController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Vorteil->recursive = 0;
		$this->set('vorteile', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Vorteil->id = $id;
		if (!$this->Vorteil->exists()) {
			throw new NotFoundException(__('Invalid vorteil'));
		}
		$this->set('vorteil', $this->Vorteil->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Vorteil->create();
			if ($this->Vorteil->save($this->request->data)) {
				$this->Session->setFlash(__('The vorteil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vorteil could not be saved. Please, try again.'));
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
		$this->Vorteil->id = $id;
		if (!$this->Vorteil->exists()) {
			throw new NotFoundException(__('Invalid vorteil'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Vorteil->save($this->request->data)) {
				$this->Session->setFlash(__('The vorteil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vorteil could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Vorteil->read(null, $id);
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
		$this->Vorteil->id = $id;
		if (!$this->Vorteil->exists()) {
			throw new NotFoundException(__('Invalid vorteil'));
		}
		if ($this->Vorteil->delete()) {
			$this->Session->setFlash(__('Vorteil deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Vorteil was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
