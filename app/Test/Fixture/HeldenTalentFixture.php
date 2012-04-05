<?php
/**
 * HeldenTalentFixture
 *
 */
class HeldenTalentFixture extends CakeTestFixture {
/**
 * Table name
 *
 * @var string
 */
	public $table = 'helden_talente';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'held_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'talent_id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'talentwert' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'attacke' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'parade' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'behinderung' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'id' => '4f779aa1-730c-4d49-a22a-1d426082e357',
			'held_id' => 'Lorem ipsum dolor sit amet',
			'talent_id' => 'Lorem ipsum dolor sit amet',
			'talentwert' => 1,
			'attacke' => 1,
			'parade' => 1,
			'behinderung' => 'Lorem ipsum dolor '
		),
	);
}
