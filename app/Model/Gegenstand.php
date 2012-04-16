<?php
App::uses('AppModel', 'Model');
/**
 * Gegenstand Model
 *
 * @property Held $Held
 */
class Gegenstand extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Held' => array(
			'className' => 'Held',
			'joinTable' => 'helden_gegenstaende',
			'foreignKey' => 'gegenstand_id',
			'associationForeignKey' => 'held_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
