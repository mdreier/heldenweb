<?php
App::uses('HeldenSonderfertigkeit', 'Model');

/**
 * HeldenSonderfertigkeit Test Case
 *
 */
class HeldenSonderfertigkeitTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.helden_sonderfertigkeit', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.eigenschaften_held', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HeldenSonderfertigkeit = ClassRegistry::init('HeldenSonderfertigkeit');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HeldenSonderfertigkeit);

		parent::tearDown();
	}

}
