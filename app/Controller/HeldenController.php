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
		//XML
		$this->indexForXml($this->Held);

		//HTML
		$this->set('helden', $this->Held->find('all'));
		$this->set('title', 'Helden');
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		//XML
		$this->viewForXml($this->Held, $id);

		//HTML
		$this->Held->id = $id;
		if (!$this->Held->exists()) {
			throw new NotFoundException(__('Invalid ' . $model));
		}
		$this->set('data', $this->Held->read(null, $id));
		$this->set('title', $this->Held->data['Held']['name']);
		$this->layout = 'held';
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$data =& $this->request->data;
		$data["Beschreibung"] = $data["Held"]["Beschreibung"];
		unset($data["Held"]["Beschreibung"]);
		$data["Wert"] = $data["Held"]["Wert"];
		unset($data["Held"]["Wert"]);
		$this->addForXml($this->Held, true);
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$dataOnServer = $this->Held->findById($id);
		//Get reference to data array
		$data =& $this->request->data;
		//Move dependent entries to top level for correct handling in saveAssociated
		//Set ID field to ensure that data is updated, not inserted
		$data["Beschreibung"] = $data["Held"]["Beschreibung"];
		$data["Beschreibung"]["id"] = $dataOnServer["Beschreibung"]["id"];
		unset($data["Held"]["Beschreibung"]);
		$data["Wert"] = $data["Held"]["Wert"];
		$data["Wert"]["id"] = $dataOnServer["Wert"]["id"];
		unset($data["Held"]["Wert"]);
		//Save data
		$this->editForXml($this->Held, $id, true);
	}
}
