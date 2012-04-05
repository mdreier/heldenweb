<?php
/**
 * VorteilFixture
 *
 */
class VorteilFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 35, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'auswahl' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'mehrfachauswahl' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'nachteil' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'wertvorteil' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
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
			'id' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'auswahl' => 1,
			'mehrfachauswahl' => 1,
			'nachteil' => 1,
			'wertvorteil' => 1
		),
	);
}
