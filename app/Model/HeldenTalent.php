<?php
App::uses('AppModel', 'Model');
/**
 * HeldenTalent Model
 *
 * @property Held $Held
 * @property Talent $Talent
 */
class HeldenTalent extends AppModel {
/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'helden_talente';
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'held_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'talent_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'talentwert' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

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
