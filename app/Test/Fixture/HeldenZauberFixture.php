<?php
/**
 * HeldenZauberFixture
 *
 */
class HeldenZauberFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'helden_zauber';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'held_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zauber_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zauberfertigkeitswert' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'repraesentation' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => '4f779aa1-26cc-4bee-a35c-1d426082e357',
			'held_id' => 'Lorem ipsum dolor sit amet',
			'zauber_id' => 'Lorem ipsum dolor sit amet',
			'zauberfertigkeitswert' => 1,
			'repraesentation' => 'Lorem ipsum dolor sit amet'
		),
	);
}
