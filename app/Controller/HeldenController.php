<?php
App::uses('AppController', 'Controller');
/**
 * Helden Controller
 *
 * @property Held $Held
 */
class HeldenController extends AppController {

	public $helpers = array('HeldenNav', 'HeldenDaten');

	public $components = array('RequestHandler');
/**
 * index method
 *
 * @return void
 */
	public function index() {
		if ($this->viewClass == 'Xml') {
			//XML
			$this->indexForXml($this->Held);
		} else {

			//HTML
			$this->set('helden', $this->Held->find('all'));
			$this->set('title', 'Helden');
		}
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if ($this->viewClass == 'Xml') {
			//XML
			$this->viewForXml($this->Held, $id);
		} else {
			//HTML
			$this->leseHeld($id);
			$this->set('selectedNav', 'view');
  		}
	}

	public function talente($id = null) {
		$this->leseHeld($id);
		$eigenschaften = $this->viewVars['eigenschaften'];
		$talentarten = array();
		foreach($this->Held->data['Talent'] as $talent) {
			$talentDaten = $this->Held->Talent->read(null, $talent['id']);

			$talentOut['name'] = $talentDaten['Talent']['name'];
			$talentOut['sprachkomplexitaet'] = $talentDaten['Talent']['sprachkomplexitaet'];
			$talentOut['probe1_eigenschaft'] = $talentDaten['Probe1']['kurzbezeichnung'];
			$talentOut['probe1_wert'] = $eigenschaften[$talentOut['probe1_eigenschaft']]['wert'];
			$talentOut['probe2_eigenschaft'] = $talentDaten['Probe2']['kurzbezeichnung'];
			$talentOut['probe2_wert'] = $eigenschaften[$talentOut['probe2_eigenschaft']]['wert'];
			$talentOut['probe3_eigenschaft'] = $talentDaten['Probe3']['kurzbezeichnung'];
			$talentOut['probe3_wert'] = $eigenschaften[$talentOut['probe3_eigenschaft']]['wert'];
			$talentOut['wert'] = $talent['HeldenTalent']['talentwert'];
			$talentOut['attacke'] = $talent['HeldenTalent']['attacke'];
			$talentOut['parade'] = $talent['HeldenTalent']['parade'];
			$talentOut['behinderung'] = $talent['HeldenTalent']['behinderung'];
			$art = $talentDaten['Talentart']['name'];

			if (!isset($talentarten[$art])) {
				$talentarten[$art]['kampf'] = false;
				$talentarten[$art]['behinderung'] = false;
				$talentarten[$art]['sprache'] = false;
			}
			$talentarten[$art]['talente'][] = $talentOut;
			if ($talentOut['attacke'] != -1 || $talentOut['parade'] != -1) {
				$talentarten[$art]['kampf'] = true;
			}
			if ($talentOut['behinderung'] != "") {
				$talentarten[$art]['behinderung'] = true;
			}
			if ($talentOut['sprachkomplexitaet'] != null) {
				$talentarten[$art]['sprache'] = true;
			}
		}
		$this->set('talentarten', $talentarten);

		$this->set('selectedNav', 'talente');
	}

	public function zauber($id) {
		$this->leseHeld($id);
		$eigenschaften = $this->viewVars['eigenschaften'];

		$zauberliste = array();
		foreach($this->Held->data['Zauber'] as $zauber) {
			$zauberDaten = $this->Held->Zauber->read(null, $zauber['id']);

			$zauberOut['name'] = $zauber['name'];
			$zauberOut['repraesentation'] = $zauber['repraesentation'];
			$zauberOut['basiskomplexitaet'] = $zauber['basiskomplexitaet'];
			$zauberOut['lernkomplexitaet'] = $zauber['lernkomplexitaet'];
			$zauberOut['hauszauber'] = $zauber['hauszauber'];
			$zauberOut['merkmale'] = $zauber['merkmale'];
			$zauberOut['kosten'] = $zauber['kosten'];
			$zauberOut['reichweite'] = $zauber['reichweite'];
			$zauberOut['wirkungsdauer'] = $zauber['wirkungsdauer'];
			$zauberOut['zauberdauer'] = $zauber['zauberdauer'];
			$zauberOut['wert'] = $zauber['HeldenZauber']['zauberfertigkeitswert'];
			$zauberOut['probe1_eigenschaft'] = $zauberDaten['Probe1']['kurzbezeichnung'];
			$zauberOut['probe1_wert'] = $eigenschaften[$zauberOut['probe1_eigenschaft']]['wert'];
			$zauberOut['probe2_eigenschaft'] = $zauberDaten['Probe2']['kurzbezeichnung'];
			$zauberOut['probe2_wert'] = $eigenschaften[$zauberOut['probe2_eigenschaft']]['wert'];
			$zauberOut['probe3_eigenschaft'] = $zauberDaten['Probe3']['kurzbezeichnung'];
			$zauberOut['probe3_wert'] = $eigenschaften[$zauberOut['probe3_eigenschaft']]['wert'];
			$zauberliste[] = $zauberOut;
		}

		$this->set('selectedNav', 'zauber');
		$this->set('zauberliste', $zauberliste);
	}

	protected function leseHeld($id) {
		$this->Held->id = $id;
		if (!$this->Held->exists()) {
			throw new NotFoundException(__('Invalid ' . $model));
		}
		$this->set('data', $this->Held->read(null, $id));
		//Lese Eigenschaften
		$eigenschaften = array();
		foreach($this->Held->data['Eigenschaft'] as $eigenschaft) {
			$eigenschaftDaten = array();
    		$eigenschaftDaten['name'] = $eigenschaft['name'];
    		$eigenschaftDaten['kurz'] = $eigenschaft['kurzbezeichnung'];
    		$eigenschaftDaten['wert'] = $eigenschaft['EigenschaftenHeld']['wert'];
    		//Nach Kurzfassung und nach ID speichern
    		$eigenschaften[$eigenschaftDaten['kurz']] = $eigenschaftDaten;
    		$eigenschaften[$eigenschaft['id']] = $eigenschaftDaten;
    	}
  		$this->set('eigenschaften', $eigenschaften);
  		//Für Navigation
  		$this->set('hatZauber', $this->Held->data['Held']['zaubersprueche']);

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
