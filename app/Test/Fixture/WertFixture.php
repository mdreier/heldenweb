<?php
/**
 * WertFixture
 *
 */
class WertFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'comment' => 'Eindeutige UUID des Helden', 'charset' => 'utf8'),
		'held_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'ap_gesamt' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'ap_eingesetzt' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'ap_verfuegbar' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'gp_start' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'gp_rest' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => '4f779aa3-f014-4261-9fa9-1d426082e357',
			'held_id' => 'Lorem ipsum dolor sit amet',
			'ap_gesamt' => 1,
			'ap_eingesetzt' => 1,
			'ap_verfuegbar' => 1,
			'gp_start' => 1,
			'gp_rest' => 1
		),
	);
}
