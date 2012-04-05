<?php
App::uses('Wert', 'Model');

/**
 * Wert Test Case
 *
 */
class WertTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.wert', 'app.held', 'app.beschreibung', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Wert = ClassRegistry::init('Wert');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Wert);

		parent::tearDown();
	}

}
