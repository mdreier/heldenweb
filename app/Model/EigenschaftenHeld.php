<?php
App::uses('AppModel', 'Model');
/**
 * EigenschaftenHeld Model
 *
 * @property Held $Held
 * @property Eigenschaft $Eigenschaft
 */
class EigenschaftenHeld extends AppModel {
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
		'eigenschaft_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'wert' => array(
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
		'Eigenschaft' => array(
			'className' => 'Eigenschaft',
			'foreignKey' => 'eigenschaft_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
