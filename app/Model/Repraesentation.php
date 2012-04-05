<?php
App::uses('AppModel', 'Model');
/**
 * Repraesentation Model
 *
 * @property Zauber $Zauber
 */
class Repraesentation extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'zauber_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'Zauber' => array(
			'className' => 'Zauber',
			'foreignKey' => 'zauber_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
