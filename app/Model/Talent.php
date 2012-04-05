<?php
App::uses('AppModel', 'Model');
/**
 * Talent Model
 *
 * @property Talentart $Talentart
 * @property Sonderfertigkeit $Sonderfertigkeit
 * @property Held $Held
 */
class Talent extends AppModel {
/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
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
		'talentart_id' => array(
			'uuid' => array(
				'rule' => array('uuid'),
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
		'Talentart' => array(
			'className' => 'Talentart',
			'foreignKey' => 'talentart_id',
		),
		'Probe1' => array (
			'className' => 'Eigenschaft',
			'foreignKey' => 'probe1'
		),
		'Probe2' => array (
			'className' => 'Eigenschaft',
			'foreignKey' => 'probe2'
		),
		'Probe3' => array (
			'className' => 'Eigenschaft',
			'foreignKey' => 'probe3'
		)
	);
}
