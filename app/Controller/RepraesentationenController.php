<?php
App::uses('AppController', 'Controller');
/**
 * Repraesentationen Controller
 *
 * @property Repraesentation $Repraesentation
 */
class RepraesentationenController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Repraesentation->recursive = 0;
		$this->set('repraesentationen', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Repraesentation->id = $id;
		if (!$this->Repraesentation->exists()) {
			throw new NotFoundException(__('Invalid repraesentation'));
		}
		$this->set('repraesentation', $this->Repraesentation->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Repraesentation->create();
			if ($this->Repraesentation->save($this->request->data)) {
				$this->Session->setFlash(__('The repraesentation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repraesentation could not be saved. Please, try again.'));
			}
		}
		$zauber = $this->Repraesentation->Zauber->find('list');
		$this->set(compact('zauber'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Repraesentation->id = $id;
		if (!$this->Repraesentation->exists()) {
			throw new NotFoundException(__('Invalid repraesentation'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Repraesentation->save($this->request->data)) {
				$this->Session->setFlash(__('The repraesentation has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The repraesentation could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Repraesentation->read(null, $id);
		}
		$zauber = $this->Repraesentation->Zauber->find('list');
		$this->set(compact('zauber'));
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
		$this->Repraesentation->id = $id;
		if (!$this->Repraesentation->exists()) {
			throw new NotFoundException(__('Invalid repraesentation'));
		}
		if ($this->Repraesentation->delete()) {
			$this->Session->setFlash(__('Repraesentation deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Repraesentation was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
