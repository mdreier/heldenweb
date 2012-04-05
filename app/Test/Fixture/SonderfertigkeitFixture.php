<?php
/**
 * SonderfertigkeitFixture
 *
 */
class SonderfertigkeitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 36, 'key' => 'primary', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'art' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'talent_id' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 36, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'elfenlied' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'fernkampf_sonderfertigkeit' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'gelaendekunde' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'hexenfluch' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'kampf_sonderfertigkeit' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'klerikal' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'liturgie' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'liturgiekenntnis' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'magisch' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'manoever' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'merkmalskenntnis' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'nahkampf_sonderfertigkeit' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'repraesentation' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'ritual' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'schamanen_ritualkenntnis' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'talentspezialisierung' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'waffenloser_kampfstil' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
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
			'id' => '4f779aa2-f694-4e55-b6b0-1d426082e357',
			'name' => 'Lorem ipsum dolor sit amet',
			'art' => 1,
			'talent_id' => 'Lorem ipsum dolor sit amet',
			'elfenlied' => 1,
			'fernkampf_sonderfertigkeit' => 1,
			'gelaendekunde' => 1,
			'hexenfluch' => 1,
			'kampf_sonderfertigkeit' => 1,
			'klerikal' => 1,
			'liturgie' => 1,
			'liturgiekenntnis' => 1,
			'magisch' => 1,
			'manoever' => 1,
			'merkmalskenntnis' => 1,
			'nahkampf_sonderfertigkeit' => 1,
			'repraesentation' => 1,
			'ritual' => 1,
			'schamanen_ritualkenntnis' => 1,
			'talentspezialisierung' => 1,
			'waffenloser_kampfstil' => 1
		),
	);
}
