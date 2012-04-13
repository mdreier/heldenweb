<?php
App::uses('AppController', 'Controller');
/**
 * HeldenVorteilen Controller
 *
 * @property HeldenVorteil $HeldenVorteil
 */
class HeldenVorteilenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenVorteil);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenVorteil, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenVorteil);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HeldenVorteil->id = $id;
		if (!$this->HeldenVorteil->exists()) {
			throw new NotFoundException(__('Invalid helden vorteil'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HeldenVorteil->save($this->request->data)) {
				$this->Session->setFlash(__('The helden vorteil has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The helden vorteil could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->HeldenVorteil->read(null, $id);
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
		$this->HeldenVorteil->id = $id;
		if (!$this->HeldenVorteil->exists()) {
			throw new NotFoundException(__('Invalid helden vorteil'));
		}
		if ($this->HeldenVorteil->delete()) {
			$this->Session->setFlash(__('Helden vorteil deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Helden vorteil was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
