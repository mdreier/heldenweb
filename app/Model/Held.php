<?php
App::uses('AppModel', 'Model');
/**
 * Held Model
 *
 * @property Beschreibung $Beschreibung
 * @property Wert $Wert
 * @property Eigenschaft $Eigenschaft
 * @property Sonderfertigkeit $Sonderfertigkeit
 * @property Talent $Talent
 * @property Vorteil $Vorteil
 * @property Zauber $Zauber
 */
class Held extends AppModel {
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
		'geschlecht' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'kultur' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'profession' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'rasse' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'stufe' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'zaubersprueche' => array(
			'boolean' => array(
				'rule' => array('boolean'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasOne = array(
		'Beschreibung' => array(
			'className' => 'Beschreibung',
			'foreignKey' => 'held_id',
			'dependent' => true,
		),
		'Wert' => array(
			'className' => 'Wert',
			'foreignKey' => 'held_id',
			'dependent' => true,
		),
		'Kampf' => array(
			'className' => 'Kampf',
			'foreignKey' => 'held_id',
			'dependent' => true,
		)
	);

	public $hasMany = array(
		'Nahkampfwaffe' => array(
			'className' => 'Nahkampfwaffe',
			'foreign_key' => 'held_id',
			'dependent' => true,
		),
		'Fernkampfwaffe' => array(
			'className' => 'Fernkampfwaffe',
			'foreign_key' => 'held_id',
			'dependent' => true,
		),
		'Schild' => array(
			'className' => 'Schild',
			'foreign_key' => 'held_id',
			'dependent' => true,
		),
		'Ruestung' => array(
			'className' => 'Ruestung',
			'foreign_key' => 'held_id',
			'dependent' => true,
		),
	);

/**
 * hasAndBelongsToMany associations
 *
 * @var array
 */
	public $hasAndBelongsToMany = array(
		'Eigenschaft' => array(
			'className' => 'Eigenschaft',
			'joinTable' => 'eigenschaften_helden',
			'foreignKey' => 'held_id',
			'associationForeignKey' => 'eigenschaft_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Sonderfertigkeit' => array(
			'className' => 'Sonderfertigkeit',
			'joinTable' => 'helden_sonderfertigkeiten',
			'foreignKey' => 'held_id',
			'associationForeignKey' => 'sonderfertigkeit_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Talent' => array(
			'className' => 'Talent',
			'joinTable' => 'helden_talente',
			'foreignKey' => 'held_id',
			'associationForeignKey' => 'talent_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => 'id',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Vorteil' => array(
			'className' => 'Vorteil',
			'joinTable' => 'helden_vorteile',
			'foreignKey' => 'held_id',
			'associationForeignKey' => 'vorteil_id',
			'unique' => 'keepExisting',
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		),
		'Zauber' => array(
			'className' => 'Zauber',
			'joinTable' => 'helden_zauber',
			'foreignKey' => 'held_id',
			'associationForeignKey' => 'zauber_id',
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
