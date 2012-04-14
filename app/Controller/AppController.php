<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

	/**
	 * Write many objects' data into an array which can be shown by the default XML view.
	 *
	 * @param $object The model instance.
	 */
	protected function indexForXml($model) {
		//Get XML element names
		$elementName = strtolower($this->modelClass);
		$rootElementName = Inflector::pluralize($elementName);

		//Retrieve data from DB
		$model->recursive = 0;
		$objects = $model->find('all');

		//Write array for XML
		$xml[$rootElementName] = array();
		foreach ($objects as $object) {
			$xml[$rootElementName][$elementName][] = $object[$this->modelClass];
		}

		//Set view variables
		$this->set($rootElementName, $xml);
		$this->set('_serialize', $rootElementName);
	}

	/**
	 * Write an object's data into an array which can be shown by the default XML view.
	 *
	 * @param string $id The object's ID.
	 * @param $model The model instance.
	 */
	protected function viewForXml($model, $id) {
		//Get XML element names
		$elementName = strtolower($this->modelClass);

		//Get Object from DB
		$model->id = $id;
		if (!$model->exists()) {
			throw new NotFoundException(__('Invalid ' . $model));
		}
		$object = $model->read(null, $id);

		//Write array for XML
		$xml[$elementName] = $object[$this->modelClass];
		foreach ($object as $key => $value) {
			if ($key == $this->modelClass) {
				continue;
			}
			$xml[$elementName][$key] = $value;
		}

		//Set view variables
		$this->set($elementName, $xml);
		$this->set('_serialize', $elementName);
	}

	/**
	 * Add a new object to the DB. Input is expected as POST data.
	 * @param $model The model instance.
	 */
	protected function addForXml($model, $saveAssociated = false) {
		//Get XML element names
		$elementName = $this->getElementName();
		if ($this->request->is('post')) {
			//Create object
			//$model->create();
			//Write data to DB and save
			$result = false;
			if ($saveAssociated == true) {
				$result = $model->saveAssociated($this->request->data);
			} else {
				$result = $model->save($this->request->data);
			}
			if ($result) {
				$xml[$elementName]['id'] = $model->id;
				if (isset ($model->displayField) && isset($model->data[$this->modelClass][$model->displayField]))
				{
					$xml[$model]['name'] = $model->data[$this->modelClass][$model->displayField];
				}
				$this->set($elementName, $xml);
				$this->set('_serialize', $elementName);
			} else {
				$this->response->statusCode(400);
				$xml['error']['message'] = "Daten konnten nicht angelegt werden";
				$this->set('error', $xml);
				$this->set('_serialize', 'error');
				//$this->response->send();
			}
		}
	}

	protected function getElementName() {
		return strtolower($this->modelClass);
	}

	protected function editForXml($model, $id, $saveAssociated = false) {
		//Get XML element names
		$elementName = $this->getElementName();
		$model->id = $id;
		if (!$model->exists()) {
			throw new NotFoundException(__('Invalid ' . $elementName));
		}
		if ($saveAssociated == true) {
			$result = $model->saveAssociated($this->request->data);
		} else {
			$result = $model->save($this->request->data);
		}
		if ($result) {
			$xml[$elementName]['id'] = $model->id;
			if (isset ($model->displayField) && isset($model->data[$this->modelClass][$model->displayField]))
			{
				$xml[$elementName]['name'] = $model->data[$this->modelClass][$model->displayField];
			}
			$this->set($elementName, $xml);
			$this->set('_serialize', $elementName);
		} else {
			$this->response->statusCode(400);
			$xml['error']['message'] = "Daten konnten nicht aktualisiert werden";
				$this->set('error', $xml);
				$this->set('_serialize', 'error');
			$this->response->send();
		}
	}
}
