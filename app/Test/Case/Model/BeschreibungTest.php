<?php
App::uses('Beschreibung', 'Model');

/**
 * Beschreibung Test Case
 *
 */
class BeschreibungTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.beschreibung', 'app.held', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Beschreibung = ClassRegistry::init('Beschreibung');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Beschreibung);

		parent::tearDown();
	}

}
