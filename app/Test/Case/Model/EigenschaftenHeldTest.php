<?php
App::uses('EigenschaftenHeld', 'Model');

/**
 * EigenschaftenHeld Test Case
 *
 */
class EigenschaftenHeldTestCase extends CakeTestCase {
/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array('app.eigenschaften_held', 'app.held', 'app.beschreibung', 'app.wert', 'app.eigenschaft', 'app.sonderfertigkeit', 'app.talent', 'app.talentart', 'app.helden_talent', 'app.helden_sonderfertigkeit', 'app.vorteil', 'app.helden_vorteil', 'app.zauber', 'app.repraesentation', 'app.helden_zauber');

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EigenschaftenHeld = ClassRegistry::init('EigenschaftenHeld');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EigenschaftenHeld);

		parent::tearDown();
	}

}
