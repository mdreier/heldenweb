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
