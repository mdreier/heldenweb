<?php
App::uses('AppModel', 'Model');
/**
 * Kampf Model
 *
 * @property Held $Held
 */
class Kampf extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'kampf';
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'id';

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Held' => array(
			'className' => 'Held',
			'foreignKey' => 'held_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
