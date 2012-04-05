<?php
App::uses('AppController', 'Controller');
/**
 * Talentarten Controller
 *
 * @property Talentart $Talentart
 */
class TalentartenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Talentart->recursive = 0;
		$this->set('talentarten', $this->paginate());
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
		$this->set('talentart', $this->Talentart->read(null, $id));
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
				$this->Session->setFlash(__('The talentart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The talentart could not be saved. Please, try again.'));
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
		$this->Talentart->id = $id;
		if (!$this->Talentart->exists()) {
			throw new NotFoundException(__('Invalid talentart'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Talentart->save($this->request->data)) {
				$this->Session->setFlash(__('The talentart has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The talentart could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Talentart->read(null, $id);
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
		$this->Talentart->id = $id;
		if (!$this->Talentart->exists()) {
			throw new NotFoundException(__('Invalid talentart'));
		}
		if ($this->Talentart->delete()) {
			$this->Session->setFlash(__('Talentart deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Talentart was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
