<?php
App::uses('AppModel', 'Model');
/**
 * Nahkampfwaffe Model
 *
 * @property Held $Held
 * @property Talent $Talent
 */
class Nahkampfwaffe extends AppModel {
/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'name';

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
		),
		'Talent' => array(
			'className' => 'Talent',
			'foreignKey' => 'talent_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
