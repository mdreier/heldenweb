<?php
App::uses('AppController', 'Controller');
/**
 * HeldenSonderfertigkeiten Controller
 *
 * @property HeldenSonderfertigkeit $HeldenSonderfertigkeit
 */
class HeldenSonderfertigkeitenController extends AppController {

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->indexForXml($this->HeldenSonderfertigkeit);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->viewForXml($this->HeldenSonderfertigkeit, $id);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->addForXml($this->HeldenSonderfertigkeit);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->HeldenSonderfertigkeit->id = $id;
		if (!$this->HeldenSonderfertigkeit->exists()) {
			throw new NotFoundException(__('Invalid helden sonderfertigkeit'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->HeldenSonderfertigkeit->save($this->request->data)) {
				$this->Session->setFlash(__('The helden sonderfertigkeit has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The helden sonderfertigkeit could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->HeldenSonderfertigkeit->read(null, $id);
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
		$this->HeldenSonderfertigkeit->id = $id;
		if (!$this->HeldenSonderfertigkeit->exists()) {
			throw new NotFoundException(__('Invalid helden sonderfertigkeit'));
		}
		if ($this->HeldenSonderfertigkeit->delete()) {
			$this->Session->setFlash(__('Helden sonderfertigkeit deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Helden sonderfertigkeit was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
